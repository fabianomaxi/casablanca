<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Occurrence extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_occurrence';

    /** Define o nome da tabela */
    protected $table = 'occurrence';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['label_number','id_user','id_product','status','id_user_attendent','resolution','obs','date'] ;

}
