<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Ferias extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_ferias';

    /** Define o nome da tabela */
    protected $table = 'ferias';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['status','id_colaborador', 'id_gestor', 'id_user_autorizacao','data_inicial','data_final','abono_pecuniario','dias_abono_pecuniario','motivo_recusa'] ;

}
