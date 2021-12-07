<?php
namespace App\Models;

use CodeIgniter\Model;

class DoadorModel extends Model 
{
    protected $table = 'tb_doadores';
    protected $primaryKey = 'id_doador';
    protected $allowedFields = ['nm_doador','tel_doador', 'email_doador', 'cpf_doador', 'dt_nasc_doador', 'senha_doador', 'anonimo_doador'];
    protected $returnType = 'object';
}