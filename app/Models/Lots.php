<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Lots extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_lot';

    /** Define o nome da tabela */
    protected $table = 'lots';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['number', 'status','id_user'] ;


}
