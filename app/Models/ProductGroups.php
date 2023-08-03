<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class ProductGroups extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_product_group';

    /** Define o nome da tabela */
    protected $table = 'product_groups';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['name', 'status','id_user', 'cod_familia', 'desc_familia', 'pict_padrao', 'procedencia', 'marca', 'descricao', 'status_grupo', 'grupo_relac', 'mark_up', 'percent_margem_pre', 'codigo', 'tipo_grupo', 'exige_conc'] ;


    public function user()
    {
        return $this->hasOne(User::class,'id_user','id_user');
    }

}
