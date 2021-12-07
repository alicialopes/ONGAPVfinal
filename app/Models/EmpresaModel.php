<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model
{
    protected $table = 'tb_emp_parceiras';
    protected $primaryKey = 'id_emp';
    protected $allowedFields = ['tp_logra_emp', 'nm_logra_emp', 'num_logra_emp', 'bairro_emp', 'cidade_emp', 'cep_emp', 'cnpj_emp', 'email_emp', 'nm_rz_social_emp', 'nm_fantasia_emp','tel_emp_parceria', 'site_emp', 'senha_emp'];
    protected $returnType = 'object';
}
