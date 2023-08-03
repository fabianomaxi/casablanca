<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

class Accountability extends Model
{
    /** Define que não desejamos atualizar automaticamente atualizar e cadastrar data de criação */
    public $timestamps = false ;

    protected $primaryKey = 'id_accountability';

    /** Define o nome da tabela */
    protected $table = 'accountability';

    /** Define os campos que são aceitos nos formulários */
    protected $fillable = ['id_accountability', 'mobile_unit_number', 'sector', 'responsible_manager', 'client', 'event', 'dates', 'city', 'state', 'job_code', 'total_meal_expenses', 'meal_expenses', 'freelancer_team_meals', 'total_freelancer_team_meals', 'total_fuel_expenses', 'start_fuel_expenses', 'finish_fuel_expenses', 'total_expenses_with_parking', 'total_expenses_with_water', 'vol_expenses_with_water', 'total_expenses_with_ice', 'qtde_expenses_with_ice', 'total_hotel_expenses', 'total_car_wash_expenses', 'total_expenses_with_mailings', 'id_user', 'status', 'id_user_manager_approved', 'id_user_fin_approved', 'date_user_manager_approved', 'date_user_fin_approved', 'obs_user_manager_approved', 'obs_user_fin_approved', 'date', 'obs_accountability'] ;

}
