<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Patients extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_patient';

    /** Define o nome da tabela */
    protected $table = 'patients';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'avatar', 'university'] ;

}
