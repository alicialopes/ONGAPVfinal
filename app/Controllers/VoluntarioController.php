<?php

namespace App\Controllers;

class VoluntarioController extends BaseController
{
        public function voluntario()
        {
                echo view('header');
                echo view('cadastroVoluntario');
                echo view('footer');
        }
        public function inserirVoluntario()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $VoluntarioModel = new \App\Models\VoluntarioModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_vol'), PASSWORD_BCRYPT, $opcao);

                        $VoluntarioModel->set('nm_vol', $request->getPost('nm_vol'));
                        $VoluntarioModel->set('tel_vol', $request->getPost('tel_vol'));
                        $VoluntarioModel->set('email_vol', $request->getPost('email_vol'));
                        $VoluntarioModel->set('cpf_vol', $request->getPost('cpf_vol'));
                        $VoluntarioModel->set('nm_logra_vol', $request->getPost('nm_logra_vol'));
                        $VoluntarioModel->set('num_logra_vol', $request->getPost('num_logra_vol'));
                        $VoluntarioModel->set('cep_vol', $request->getPost('cep_vol'));
                        $VoluntarioModel->set('dt_nasc_vol', $request->getPost('dt_nasc_vol'));
                        $VoluntarioModel->set('ativ_vol', $request->getPost('ativ_vol'));
                        $VoluntarioModel->set('senha_vol', $senhaCrip);

                if ($VoluntarioModel->insert()) {
                        $data['msg'] = "Informações cadastradas com sucesso";
                } else {
                        $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroVoluntario', $data);
                echo view('footer');
        }        

        public function todosVoluntarios()
        {
                $VoluntarioModel = new \App\Models\VoluntarioModel();
                $registros = $VoluntarioModel->find();
                $data['voluntarios'] = $registros;

                $request = service('request');
                $codVoluntario = $request->getPost('id_vol');
                $codVoluntarioAlterar = $request->getPost('codVoluntarioAlterar');

                if ($codVoluntario) {
                        $this->deletarVoluntario($codVoluntario);
                        return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
                }

                if ($codVoluntarioAlterar) {
                        return $this->alterarVoluntario();
                }

                echo view('header');
                echo view('listaVoluntario', $data);
                echo view('footer');
        }

        public function alterarVoluntario()
        {
                $request = service('request');
                $codVoluntarioAlterar = $request->getPost('codVoluntarioAlterar');
                $nomeVol = $request->getPost('nm_vol');
                $telefoneVol = $request->getPost('tel_vol');
                $emailVol = $request->getPost('email_vol');
                $cpfVol = $request->getPost('cpf_vol');
                $nomelograVol = $request->getPost('nm_logra_vol');
                $numerolograVol = $request->getPost('num_logra_vol');
                $cepVol = $request->getPost('cep_vol');
                $datanascimentoVol = $request->getPost('dt_nasc_vol');
                $atividadeVol = $request->getPost('ativ_vol');

                $VoluntarioModel = new \App\Models\VoluntarioModel();
                $registros = $VoluntarioModel->find($codVoluntarioAlterar);

                if ($nomeVol && $telefoneVol && $emailVol && $cpfVol && $nomelograVol && $numerolograVol && $cpfVol && $datanascimentoVol && $atividadeVol) {
                        $registros->nm_vol = $nomeVol;
                        $registros->tel_vol = $telefoneVol;
                        $registros->email_vol = $emailVol;
                        $registros->cpf_vol = $cpfVol;
                        $registros->nm_logra_vol = $nomelograVol;
                        $registros->num_logra_vol = $numerolograVol;
                        $registros->cep_vol = $cepVol;
                        $registros->dt_nasc_vol = $datanascimentoVol;
                        $registros->ativ_vol = $atividadeVol;

                        $VoluntarioModel->update($codVoluntarioAlterar, $registros);
                        return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
                }

                $data['voluntario'] = $registros;

                echo view('header');
                echo view('alterarFormVol', $data);
                echo view('footer');
        }

        public function deletarVoluntario($codVoluntario = null)
        {
                if (is_null($codVoluntario)) {
                        return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
                }

                $VoluntarioModel = new \App\Models\VoluntarioModel();
                if ($VoluntarioModel->delete($codVoluntario)) {
                        return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
                } else {
                        return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
                }
                return redirect()->to(base_url('VoluntarioController/todosVoluntarios/'));
        }
}
