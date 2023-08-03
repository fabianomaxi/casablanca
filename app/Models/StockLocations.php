<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class StockLocations extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_stock_locations';

    /** Define o nome da tabela */
    protected $table = 'stock_locations';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'tipo', 'logradouro','status','id_user', 'license_plate'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
