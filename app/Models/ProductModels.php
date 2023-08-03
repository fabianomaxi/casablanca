<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class ProductModels extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_product_models';

    /** Define o nome da tabela */
    protected $table = 'product_models';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'descricao','status','id_user', 'codigo', 'tipo', 'unidade', 'familia', 'desc_familia', 'pos_ipi_ncm', 'desc_espec', 'materia_pri', 'ipi_de_pauta', 'obs', 'serie'] ;

    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }
    
}
