<?php

namespace App\Controllers;

class ItemDoacaoController extends BaseController
{
    public function ItemDoacao()
    {
        echo view('header');
        echo view('CadastroItemDoacao');
        echo view('footer');
    }

    public function inserirItemDoacao()
    {
        $data['msg'] = '';
        $request = service('request');
        if ($request->getMethod() === 'post') {

            $ItemDoacaoModel = new \App\Models\ItemDoacaoModel();
            $DoadorModelo = new \App\Models\DoadorModel();
            $DoacaoModelo = new \App\Models\DoacaoModel();
            $doadorID = $DoadorModelo->query('select id_doador from tb_doadores order by id_doador desc limit 1 ')->getResultObject();
            foreach ($doadorID as $sla) {
                $NewID[] = $sla->id_doador;
            }
            $idDoador = implode($NewID);

            // Tabela de doações
            $dataAtual = date('Y-m-d');

            $DoacaoModelo->set('id_doadorFK', $idDoador);
            $DoacaoModelo->set('dt_doacao', $dataAtual);
            if ($DoacaoModelo->insert()) {
                echo '';
            }

            // tabela tipo do item doação
            $tipoModelo = new \App\Models\TpItemDoacaoModel();
            $nomeTpDoacao = $request->getPost('catItemDoacao');
            $TpDoacaoId = $tipoModelo->query('select * from tb_tp_doacao where nm_tp_doacao like "%' . $nomeTpDoacao . '%" ')->getResultObject();
            foreach ($TpDoacaoId as $IdDoTipo) {
                $NewIdTipo[] = $IdDoTipo->id_tp_doacao;
            }
            $idTpDoacao = implode($NewIdTipo);


            // ultimo ID doacao
            $doacaoID = $DoacaoModelo->query('select id_doacao from tb_doacao order by id_doacao desc limit 1 ')->getResultObject();
            foreach ($doacaoID as $IdDaDoacao) {
                $NewIdDoacao[] = $IdDaDoacao->id_doacao;
            }
            $idDoacao = implode($NewIdDoacao);

            // Tabela Tipo da Doação
            $ItemDoacaoModel->set('id_doacaoFK', $idDoacao);
            $ItemDoacaoModel->set('nm_item', $request->getPost('nomeItemDoacao'));
            $ItemDoacaoModel->set('qtde_item', $request->getPost('qtdItemDoacao'));
            $ItemDoacaoModel->set('id_tp_doacaoFK', $idTpDoacao);                 

            if ($ItemDoacaoModel->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "Informações não cadastradas";
            }
        }
        echo view('header');
        echo view('CadastroItemDoacao', $data);
        echo view('footer');
    }

    public function todosItensDoacoes()
    {
        $ItemDoacaoModel = new \App\Models\ItemDoacaoModel();
        $registros = $ItemDoacaoModel->find();
        $data['itensdoacoes'] = $registros;

        $request = service('request');
        $codItemDoacao = $request->getPost('id_item_doacao');
        $codItemDoacaoAlterar = $request->getPost('codItemDoacaoAlterar');

        if ($codItemDoacao) {
            $this->deletarItemDoacao($codItemDoacao);
            return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
        }

        if ($codItemDoacaoAlterar) {
            return $this->alterarItemDoacao();
        }

        echo view('header');
        echo view('listaItemDoacao', $data);
        echo view('footer');
    }

    public function alterarItemDoacao()
    {
        $request = service('request');
        $codItemDoacaoAlterar = $request->getPost('codItemDoacaoAlterar');
        $categoriaItemDoacao = $request->getPost('categoria_item');
        $nomeItemDoacao = $request->getPost('nm_item');
        $qtdItemDoacao = $request->getPost('qtde_item');

        $ItemDoacaoModel = new \App\Models\ItemDoacaoModel();
        $registros = $ItemDoacaoModel->find($codItemDoacaoAlterar);

        if ($categoriaItemDoacao && $nomeItemDoacao && $qtdItemDoacao) {
            $registros->categoria_item = $categoriaItemDoacao;
            $registros->nm_item = $nomeItemDoacao;
            $registros->qtde_item = $qtdItemDoacao;

            $ItemDoacaoModel->update($codItemDoacaoAlterar, $registros);
            return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
        }

        $data['itemdoacao'] = $registros;

        echo view('header');
        echo view('alterarFormItemDoacao', $data);
        echo view('footer');
    }

    public function deletarItemDoacao($codItemDoacao = null)
    {
        if (is_null($codItemDoacao)) {
            return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
        }

        $ItemDoacaoModel = new \App\Models\ItemDoacaoModel();
        if ($ItemDoacaoModel->delete($codItemDoacao)) {
            return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
        } else {
            return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
        }
        return redirect()->to(base_url('ItemDoacaoController/todosItensDoacoes/'));
    }
}
