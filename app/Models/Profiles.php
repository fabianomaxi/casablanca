<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Profiles extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_profile';

    /** Define o nome da tabela */
    protected $table = 'profiles';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'description','status','id_user'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
