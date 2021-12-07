<?php

namespace App\Controllers;

class EmpresaController extends BaseController
{
        public function empresa()
        {
                echo view('header');
                echo view('cadastroEmpresa');
                echo view('footer');
        }

        public function inserirEmpresa()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $EmpresaModel = new \App\Models\EmpresaModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_emp'), PASSWORD_BCRYPT, $opcao);

                        $EmpresaModel->set('tp_logra_emp', $request->getPost('tp_logra_emp'));
                        $EmpresaModel->set('nm_logra_emp', $request->getPost('nm_logra_emp'));
                        $EmpresaModel->set('num_logra_emp', $request->getPost('num_logra_emp'));
                        $EmpresaModel->set('bairro_emp', $request->getPost('bairro_emp'));
                        $EmpresaModel->set('cidade_emp', $request->getPost('cidade_emp'));
                        $EmpresaModel->set('cep_emp', $request->getPost('cep_emp'));
                        $EmpresaModel->set('cnpj_emp', $request->getPost('cnpj_emp'));
                        $EmpresaModel->set('email_emp', $request->getPost('email_emp'));
                        $EmpresaModel->set('nm_rz_social_emp', $request->getPost('nm_rz_social_emp'));
                        $EmpresaModel->set('nm_fantasia_emp', $request->getPost('nm_fantasia_emp'));
                        $EmpresaModel->set('tel_emp_parceria', $request->getPost('tel_emp_parceria'));
                        $EmpresaModel->set('site_emp', $request->getPost('site_emp'));
                        $EmpresaModel->set('senha_emp', $senhaCrip);

                        if ($EmpresaModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroEmpresa', $data);
                echo view('footer');
        }

        public function todosEmpParceiras()
        {
                $EmpresaModel = new \App\Models\EmpresaModel();
                $registros = $EmpresaModel->find();
                $data['empresas'] = $registros;

                $request = service('request');
                $codEmpresa = $request->getPost('id_emp');
                $codEmpresaAlterar = $request->getPost('codEmpresaAlterar');

                if ($codEmpresa) {
                        $this->deletarEmpParceira($codEmpresa);
                        return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
                }

                if ($codEmpresaAlterar) {
                        return $this->alterarEmpParceira();
                }

                echo view('header');
                echo view('listaEmpresa', $data);
                echo view('footer');
        }

        public function alterarEmpParceira()
        {
                $request = service('request');
                $codEmpresaAlterar = $request->getPost('codEmpresaAlterar');
                $nometipoEmp = $request->getPost('tp_logra_emp');
                $nomelograEmp = $request->getPost('nm_logra_emp');
                $numerolograEmp = $request->getPost('num_logra_emp');
                $bairroEmp = $request->getPost('bairro_emp');
                $cidadeEmp = $request->getPost('cidade_emp');
                $cepEmp = $request->getPost('cep_emp');
                $cnpjEmp = $request->getPost('cnpj_emp');
                $emailEmp = $request->getPost('email_emp');
                $nomerazaosocialEmp = $request->getPost('nm_rz_social_emp');
                $nomefantasiaEmp = $request->getPost('nm_fantasia_emp');
                $telefoneEmp = $request->getPost('tel_emp_parceria');
                $siteEmp = $request->getPost('site_emp');

                $EmpresaModel = new \App\Models\EmpresaModel();
                $registros = $EmpresaModel->find($codEmpresaAlterar);

                if ($nometipoEmp && $nomelograEmp && $numerolograEmp && $bairroEmp && $cidadeEmp && $cepEmp && $cnpjEmp && $emailEmp && $nomerazaosocialEmp && $nomefantasiaEmp && $telefoneEmp && $siteEmp) {
                        $registros->tp_logra_emp = $nometipoEmp;
                        $registros->nm_logra_emp = $nomelograEmp;
                        $registros->num_logra_emp = $numerolograEmp;
                        $registros->bairro_emp = $bairroEmp;
                        $registros->cidade_emp = $cidadeEmp;
                        $registros->cep_emp = $cepEmp;
                        $registros->cnpj_emp = $cnpjEmp;
                        $registros->email_emp = $emailEmp;
                        $registros->nm_rz_social_emp = $nomerazaosocialEmp;
                        $registros->nm_fantasia_emp = $nomefantasiaEmp;
                        $registros->tel_emp_parceria = $telefoneEmp;
                        $registros->site_emp = $siteEmp;

                        $EmpresaModel->update($codEmpresaAlterar, $registros);
                        return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
                }

                $data['empresa'] = $registros;

                echo view('header');
                echo view('alterarFormEmpresa', $data);
                echo view('footer');
        }

        public function deletarEmpParceira($codEmpresa = null)
        {
                if (is_null($codEmpresa)) {
                        return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
                }

                $EmpresaModel = new \App\Models\EmpresaModel();
                if ($EmpresaModel->delete($codEmpresa)) {
                        return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
                } else {
                        return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
                }
                return redirect()->to(base_url('EmpresaController/todosEmpParceiras/'));
        }
}
