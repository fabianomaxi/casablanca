<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Movements extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_movements';

    /** Define o nome da tabela */
    protected $table = 'movements';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['date', 'description', 'status', 'id_user', 'id_products', 'id_stock_locations_from', 'id_stock_locations_to', 'name_exit', 'responsible_professional'] ;

    public function products()
    {
        return $this->hasOne(Products::class,'id_products','id_products');
    }

    public function stockLocationsFrom()
    {
        return $this->hasOne(StockLocations::class,'id_stock_locations','id_stock_locations_from');
    }

    public function stockLocationsTo()
    {
        return $this->hasOne(StockLocations::class,'id_stock_locations','id_stock_locations_to');
    }
}
