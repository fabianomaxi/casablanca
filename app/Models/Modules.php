<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Modules extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_module';

    /** Define o nome da tabela */
    protected $table = 'modules';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['module_departament','name', 'slug','status','id_user','main_module','order','module_departament'] ;

}
