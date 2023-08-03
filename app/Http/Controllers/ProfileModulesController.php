<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request ;
use App\Models\ProfileModules;
use App\Models\Users;
use App\Models\Profiles;
use App\Models\Modules;


class ProfileModulesController extends Controller
{

    public function index( Request $request ) {
        
        $status = ['0' => 'Inativo' , '1' => 'Ativo'] ;

        # preciso listar os usuários
        $profile_modules = ProfileModules::where('status','1')->get() ;
        // Users::where('id_user','2')->get() ; // pego o usuario de id - 2
        // Users::create($request) ;
        // Users::where('id_user',2)->update([$request]) ;
        // Users::where('id_user',2)->delete() ;

        return view( 'list_profile_modules' , ['data' => $profile_modules,'status' => $status]);

    }

    #exibir o formulário para preencher
    public function new( Request $request ) {
        return view( 'form_profile_module');
    }

    public function show( Request $request ) {

        $profile_modules = ProfileModules::find($request->id) ;
        return view( 'form_profile_module' , ['data' => $profile_modules]);

    }

    public function destroy( Request $request ) {
        
        ProfileModules::find($request->id)->update(['status' => '0']);
        return  $this->index( $request ) ;
    }

    public function store( Request $request ) {

        $request->merge(['id_user' => $request->session()->get('userIdSession')]) ;

        if( ! empty( $request->id ) ) {
            ProfileModules::find($request->id)->update($request->all());
        } else{
            ProfileModules::create( $request->all() ) ;
        }

       return  $this->index( $request ) ;

    }

    public function showPerfil(Request $request)
    {
        $modules = ProfileModules::select("id_user", "id_profile", "id_modules")
            ->where("id_user", $request->id)
            ->get();

        $return = "";
        $mActive = [] ;
        
        $users = Users::all() ;
        if( ! empty($users) ) {
            foreach( $users as $user ){
                $userData[$user->id_user] = $user->name ;
            }
        }

        $modules = Modules::all() ;
        if( ! empty($modules) ) {
            foreach( $modules as $module ){
                $modulo[$module->id_modules] = $module->name ;
            }
        }

        $profiles = Profiles::all() ;
        if( ! empty($profiles) ) {
            foreach( $profiles as $profile ){
                $dataProfile[$profile->id_profile] = $profile->name ;
            }
        }
    
        $modulesActive = ProfileModules::where('id_profile',$request->id)->where('status','1')->get() ;
        if( ! empty($modulesActive) ){
            foreach($modulesActive as $moduleActive){
                $mActive[] = $moduleActive->id_modules ;
            }
        }

        $return = '<div class="row">' ;

        foreach($modules as $module){

            $return .= '
            <div class="col-sm-12">
                    <input type="hidden" name="id_profile"  value="'.$request->id.'">
                    <input type="checkbox" '.(in_array($module->id_module,$mActive) ? 'checked' : '').' class="custom-control-input" name="id_modules['.$module->id_module.']" 
                    value="'.$module->id_module.'" id="id_profile_'.$module->id_module.'">
                    <label class="custom-control-label" for="id_profile_'.$module->id_module.'">'.$module->name.'</label>
                </div>
            </div>
            </div>
            ';

        }

        return $return;

    }

    public function savePermissions( Request $request ) {
        
        if( ! empty($request->id_modules) ){

            ProfileModules::where('id_profile',$request->id_profile)->update(['status'=>'0']) ;
            
            
            foreach($request->id_modules as $module) {

                $profileModules = new ProfileModules() ;
                $profileModules->id_profile = $request->id_profile;
                $profileModules->id_modules = $module;
                $profileModules->id_user = $request->session()->get('userIdSession');
                
                $profileModules->save() ;

            }

        }

        return redirect('/profiles');

    }

}