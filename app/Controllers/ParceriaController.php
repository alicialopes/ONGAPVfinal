<?php

namespace App\Controllers;

class ParceriaController extends BaseController
{
        public function parceria()
        {
                echo view('header');
                echo view('cadastroParceria');
                echo view('footer');
        }
        public function inserirParceria()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $ParceriaModel = new \App\Models\ParceriaModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_parc'), PASSWORD_BCRYPT, $opcao);

                        $ParceriaModel->set('nm_parc', $request->getPost('nm_parc'));
                        $ParceriaModel->set('tp_logra_parc', $request->getPost('tp_logra_parc'));
                        $ParceriaModel->set('nm_logra_parc', $request->getPost('nm_logra_parc'));
                        $ParceriaModel->set('tel_parceria', $request->getPost('tel_parceria'));
                        $ParceriaModel->set('num_logra_parc', $request->getPost('num_logra_parc'));
                        $ParceriaModel->set('bairro_parc', $request->getPost('bairro_parc'));
                        $ParceriaModel->set('cidade_parc', $request->getPost('cidade_parc'));
                        $ParceriaModel->set('cep_parc', $request->getPost('cep_parc'));
                        $ParceriaModel->set('email_parc', $request->getPost('email_parc'));
                        $ParceriaModel->set('site_parc', $request->getPost('site_parc'));
                        $ParceriaModel->set('senha_parc', $senhaCrip);

                        if ($ParceriaModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroParceria', $data);
                echo view('footer');
        }

        public function todosParcerias()
        {
                $ParceriaModel = new \App\Models\ParceriaModel();
                $registros = $ParceriaModel->find();
                $data['parcerias'] = $registros;

                $request = service('request');
                $codParceria = $request->getPost('id_parc');
                $codParceriaAlterar = $request->getPost('codParceriaAlterar');

                if ($codParceria) {
                        $this->deletarParceria($codParceria);
                        return redirect()->to(base_url('ParceriaController/todosParcerias/'));
                }

                if ($codParceriaAlterar) {
                        return $this->alterarParceria();
                }

                echo view('header');
                echo view('listaParceria', $data);
                echo view('footer');
        }

        public function alterarParceria()
        {
                $request = service('request');
                $codParceriaAlterar = $request->getPost('codParceriaAlterar');
                $nomeParc = $request->getPost('nm_parc');
                $telefoneParc = $request->getPost('tel_parceria');
                $tipolograParc = $request->getPost('tp_logra_parc');
                $nomelograParc = $request->getPost('nm_logra_parc');
                $numerolograParc = $request->getPost('num_logra_parc');
                $bairroParc = $request->getPost('bairro_parc');
                $cidadeParc = $request->getPost('cidade_parc');
                $cepParc = $request->getPost('cep_parc');
                $emailParc = $request->getPost('email_parc');
                $siteParc = $request->getPost('site_parc');

                $ParceriaModel = new \App\Models\ParceriaModel();
                $registros = $ParceriaModel->find($codParceriaAlterar);

                $emailParc = $request->getPost('email_parc');
                if ($nomeParc && $telefoneParc && $tipolograParc && $nomelograParc && $numerolograParc && $bairroParc && $cidadeParc && $cepParc && $emailParc && $siteParc) {
                        $registros->nm_parc = $nomeParc;
                        $registros->tel_parceria = $telefoneParc;
                        $registros->tp_logra_parc = $tipolograParc;
                        $registros->nm_logra_parc = $nomelograParc;
                        $registros->num_logra_parc = $numerolograParc;
                        $registros->bairro_parc = $bairroParc;
                        $registros->cidade_parc = $cidadeParc;
                        $registros->cep_parc = $cepParc;
                        $registros->email_parc = $emailParc;
                        $registros->site_parc = $siteParc;                        

                        $ParceriaModel->update($codParceriaAlterar, $registros);
                        return redirect()->to(base_url('ParceriaController/todosParcerias/'));
                }

                $data['parceria'] = $registros;

                echo view('header');
                echo view('alterarFormParceria', $data);
                echo view('footer');
        }

        public function deletarParceria($codParceria = null)
        {
                if (is_null($codParceria)) {
                        return redirect()->to(base_url('ParceriaController/todosParcerias/'));
                }

                $ParceriaModel = new \App\Models\ParceriaModel();
                if ($ParceriaModel->delete($codParceria)) {
                        return redirect()->to(base_url('ParceriaController/todosParcerias/'));
                } else {
                        return redirect()->to(base_url('ParceriaController/todosParcerias/'));
                }
                return redirect()->to(base_url('ParceriaController/todosParcerias/'));
        }
}
