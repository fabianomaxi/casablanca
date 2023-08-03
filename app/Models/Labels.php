<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Labels extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_labels';

    /** Define o nome da tabela */
    protected $table = 'labels';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'status','used','id_user','id_stock_locations'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

    public function stock()
    {
        return $this->hasMany(StockLocations::class);
    }

    

}
