<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class AttendancesMessages extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_attendance_message';

    /** Define o nome da tabela */
    protected $table = 'attendances_messages';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['date', 'id_attendance', 'id_phrase','id_patient','id_student'] ;

    public function phrases()
    {
        return $this->hasOne(Phrases::class,'id_phrase','id_phrase');
    }

    public function patient()
    {
        return $this->hasOne(Patients::class,'id_patient','id_patient');
    }

    public function student()
    {
        return $this->hasOne(Students::class,'id_student','id_student');
    }

}
