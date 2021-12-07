<?php
namespace App\Models;

use CodeIgniter\Model;

class VoluntarioModel extends Model 
{
    protected $table = 'tb_voluntarios';
    protected $primaryKey = 'id_vol';
    protected $allowedFields = ['nm_vol','tel_vol','email_vol','cpf_vol', 'nm_logra_vol', 'num_logra_vol', 'cep_vol',	'dt_nasc_vol',	'ativ_vol',	'senha_vol'];
    protected $returnType = 'object';
}