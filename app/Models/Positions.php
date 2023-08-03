<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Positions extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_positions';

    /** Define o nome da tabela */
    protected $table = 'positions';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'status'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
