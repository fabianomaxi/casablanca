<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class ProfileModules extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_profile_module';

    /** Define o nome da tabela */
    protected $table = 'profile_modules';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['status', 'id_user','id_profile','id_modules'] ;

}
