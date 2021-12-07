<?php
namespace App\Models;

use CodeIgniter\Model;

class DoacaoModel extends Model 
{
    protected $table = 'tb_doacao';
    protected $primaryKey = 'id_doacao';
    protected $allowedFields = ['id_doadorFK','dt_doacao'];
    protected $returnType = 'object';
}