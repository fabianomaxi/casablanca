<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Manufacturer extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_manufacturer';

    /** Define o nome da tabela */
    protected $table = 'manufacturer';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'phone','status'] ;
    
}
