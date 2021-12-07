<?php
namespace App\Models;

use CodeIgniter\Model;

class ParceriaModel extends Model 
{
    protected $table = 'tb_parcerias';
    protected $primaryKey = 'id_parc';
    protected $allowedFields = ['nm_parc', 'tp_logra_parc',	'nm_logra_parc','tel_parceria', 'num_logra_parc', 'bairro_parc', 'cidade_parc', 'cep_parc', 'email_parc', 'site_parc', 'senha_parc'];
    protected $returnType = 'object';
}