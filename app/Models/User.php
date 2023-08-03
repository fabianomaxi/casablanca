<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class User extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_user';

    /** Define o nome da tabela */
    protected $table = 'users';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'email', 'password','status','id_profile','is_admin','id_module_departament','phone',
    'address','date_of_birth','marital_status','id_positions','admission_date','type_of_employment'] ;

}
