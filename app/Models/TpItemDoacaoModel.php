<?php
namespace App\Models;

use CodeIgniter\Model;

class TpItemDoacaoModel extends Model 
{
    protected $table = 'tb_tp_doacao';
    protected $primaryKey = 'id_tp_doacao';
    protected $allowedFields = ['nm_tp_doacao', 'st_ativo'];
    protected $returnType = 'object';
}