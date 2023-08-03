<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Vacation extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_vacation';

    /** Define o nome da tabela */
    protected $table = 'vacation';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['id_user', 'id_user_manager_aprouve','id_user_rh_aprouve','date','date_vacation_start','date_vacation_finisch',
    'cash_allowance','observations'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
