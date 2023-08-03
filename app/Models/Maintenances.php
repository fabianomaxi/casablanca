<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Maintenances extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_maintenance';

    /** Define o nome da tabela */
    protected $table = 'maintenances';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['date', 'description', 'situation', 'status', 'id_user', 'id_products'] ;

}
