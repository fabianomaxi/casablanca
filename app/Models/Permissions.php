<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Permissions extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_permissions';

    /** Define o nome da tabela */
    protected $table = 'permissions';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['id_modules','id_user','id_user_analysed','status','dt_analysed','date','obs'] ;

}
