<?php

namespace App\Controllers;

class GrupoController extends BaseController
{
        public function grupo()
        {
                echo view('header');
                echo view('cadastroGrupo');
                echo view('footer');
        }

        public function inserirGrupo()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $GrupoModel = new \App\Models\GrupoModel();
                        $GrupoModel->set('local_grupo', $request->getPost('local_grupo'));
                        $GrupoModel->set('apelido_grupo', $request->getPost('apelido_grupo'));
                        $GrupoModel->set('desc_grupo', $request->getPost('desc_grupo'));

                        if ($GrupoModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroGrupo', $data);
                echo view('footer');
        }
}
