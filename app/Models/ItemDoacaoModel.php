<?php
namespace App\Models;

use CodeIgniter\Model;

class ItemDoacaoModel extends Model 
{
    protected $table = 'tb_item_doacao';
    protected $primaryKey = 'id_item_doacao';
    protected $allowedFields = ['nm_item','qtde_item','id_doacaoFK','id_tp_doacaoFK'];
    protected $returnType = 'object';
}