<?php
namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model 
{
    protected $table = 'tb_grupos_vulneraveis';
    protected $primaryKey = 'id_grupo';
    protected $allowedFields = ['local_grupo','apelido_grupo','desc_grupo'];
    protected $returnType = 'object';
}