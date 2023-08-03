<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Phrases extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_phrase';

    /** Define o nome da tabela */
    protected $table = 'phrases';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['title', 'phrase', 'university'] ;

}
