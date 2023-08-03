<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class HelpDesk extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_help_desk';

    /** Define o nome da tabela */
    protected $table = 'help_desk';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['title', 'id_user_open','id_user_close','date','date_close','status',
    'description'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
