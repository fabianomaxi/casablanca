<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Attendances extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_attendance';

    /** Define o nome da tabela */
    protected $table = 'attendances';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['id_patient', 'id_student', 'status'] ;

    public function student()
    {
        return $this->hasOne(Students::class,'id_student','id_student');
    }

    public function patient()
    {
        return $this->hasOne(Patients::class,'id_patient','id_patient');
    }

    public function messages()
    {
        return $this->hasMany(AttendancesMessages::class,'id_attendance','id_attendance');
    }

}
