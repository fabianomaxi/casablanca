<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Products extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_products';

    /** Define o nome da tabela */
    protected $table = 'products';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['image','name', 'description', 'serie', 'status','id_user', 'date_acquisition', 'id_labels', 'id_product_group', 'id_product_models', 'id_manufacturer'] ;

    public function user()
    {
        return $this->hasOne(Users::class,'id_user','id_user');
    }
    
}
