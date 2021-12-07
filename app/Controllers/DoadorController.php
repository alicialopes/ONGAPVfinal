<?php

namespace App\Controllers;

class DoadorController extends BaseController
{
        public function doador()
        {
                echo view('header');
                echo view('cadastroDoador');
                echo view('footer');
        }

        public function inserirDoador()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $DoadorModel = new \App\Models\DoadorModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_doador'), PASSWORD_BCRYPT, $opcao);

                        $DoadorModel->set('nm_doador', $request->getPost('nm_Doador'));
                        $DoadorModel->set('tel_doador', $request->getPost('tel_doador'));
                        $DoadorModel->set('email_doador', $request->getPost('email_Doador'));
                        $DoadorModel->set('cpf_doador', $request->getPost('cpf_Doador'));
                        $DoadorModel->set('dt_nasc_doador', $request->getPost('dt_nasc_Doador'));
                        $DoadorModel->set('senha_doador', $senhaCrip);
                        //$DoadorModel->set('anonimo_doador', $request->getPost('anonimo_doador'));

                        if ($DoadorModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                                return redirect()->to(base_url('./ItemDoacaoController/inserirItemDoacao'));
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroDoador', $data);
                echo view('footer');
        }

        public function todosDoadores()
        {
                $DoadorModel = new \App\Models\DoadorModel();
                $registros = $DoadorModel->find();
                $data['doadores'] = $registros;

                $request = service('request');
                $codDoador = $request->getPost('id_doador');
                $codDoadorAlterar = $request->getPost('codDoadorAlterar');

                if ($codDoador) {
                        $this->deletarDoador($codDoador);
                        return redirect()->to(base_url('DoadorController/todosDoadores/'));
                }

                if ($codDoadorAlterar) {
                        return $this->alterarDoador();
                }

                echo view('header');
                echo view('listaDoador', $data);
                echo view('footer');
        }

        public function alterarDoador()
        {
                $request = service('request');
                $codDoadorAlterar = $request->getPost('codDoadorAlterar');
                $nomeDoador = $request->getPost('nm_doador');
                $telefoneDoador = $request->getPost('tel_doador');
                $emailDoador = $request->getPost('email_doador');
                $cpfDoador = $request->getPost('cpf_doador');
                $datanascimentoDoador = $request->getPost('dt_nasc_doador');

                $DoadorModel = new \App\Models\DoadorModel();
                $registros = $DoadorModel->find($codDoadorAlterar);

                if ($nomeDoador && $telefoneDoador && $emailDoador && $cpfDoador && $datanascimentoDoador) {
                        $registros->nm_doador = $nomeDoador;
                        $registros->tel_doador = $telefoneDoador;
                        $registros->email_doador = $emailDoador;
                        $registros->cpf_doador = $cpfDoador;
                        $registros->dt_nasc_doador = $datanascimentoDoador;

                        $DoadorModel->update($codDoadorAlterar, $registros);
                        return redirect()->to(base_url('DoadorController/todosDoadores/'));
                }

                $data['doador'] = $registros;

                echo view('header');
                echo view('alterarFormDoador', $data);
                echo view('footer');
        }

        public function deletarDoador($codDoador = null)
        {
                if (is_null($codDoador)) {
                        return redirect()->to(base_url('DoadorController/todosDoadores/'));
                }

                $DoadorModel = new \App\Models\DoadorModel();
                if ($DoadorModel->delete($codDoador)) {
                        return redirect()->to(base_url('DoadorController/todosDoadores/'));
                } else {
                        return redirect()->to(base_url('DoadorController/todosDoadores/'));
                }
                return redirect()->to(base_url('DoadorController/todosDoadores/'));
        }
}
