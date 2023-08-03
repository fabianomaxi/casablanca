<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class States extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id';

    /** Define o nome da tabela */
    protected $table = 'estado';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['nome','status'] ;

}
