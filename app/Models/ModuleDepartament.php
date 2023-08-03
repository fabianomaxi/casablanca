<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class ModuleDepartament extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_module_departament';

    /** Define o nome da tabela */
    protected $table = 'module_departament';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'slug','status','description'] ;

}
