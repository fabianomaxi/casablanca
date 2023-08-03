<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class UserLogs extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_user_log';

    /** Define o nome da tabela */
    protected $table = 'user_log';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['date', 'action', 'data_json','id_user','id_module'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

    public function module()
    {
        return $this->hasOne(Modules::class,'id_module','id_module');
    }

}
