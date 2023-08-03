<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class TypeOfEmployment extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_type_of_employment';

    /** Define o nome da tabela */
    protected $table = 'type_of_employment';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'status'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
