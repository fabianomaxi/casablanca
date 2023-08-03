<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Students extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_student';

    /** Define o nome da tabela */
    protected $table = 'students';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['nome', 'email', 'passwd','status','university','id_user','token'] ;

}
