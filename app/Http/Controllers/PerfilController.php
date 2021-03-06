<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Http\Requests;
use App\client;
use App\User;
use App\Province;
use Carbon\Carbon;
use Validator;

class PerfilController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }


    public function index()
    {
        $client = new client;
        return view('store.perfil.perfil', compact('client'));
        

        
    }

    public function show(Request $request, $idus){ 
        if(\Auth::check()){

           $client = new client;
           $user = new User;
           $prov = new Province;
           $perfil = $client->select()->where('users_id', '=', $idus)->first();
           $users = $user->select()->where('id', '=', $idus)->first();
           $provincia = $prov->select()->where('id', '=', $perfil->provincia_idprovincia)->first();
        //dd($provincia);
           return view('store.perfil.perfil',compact('perfil','users','provincia'));
       }else{
        return abort(444);
    }
}

public function edit(client $client){  
    $provinces = Province::orderBy('id', 'desc')->lists('prov','id');
    return view('store.perfil.edit', compact('client','provinces'));
}

public function update(Request $request, client $client){ 

    $provinces = Province::orderBy('id', 'desc')->lists('prov','id');
    $rules = [
    'name' => 'required|min:3|max:255|regex:/^[a-záéíóúÁÉÍÓÚñàéìòùÀÈÌÒÙÑ1234567890]+$/i',
    'cedula' => 'unique:clients|min:10|',
    'ruc' => 'unique:clients|min:13|',
    ];

    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
        \Session::flash('flash_message', 'No se pudieron actualizar algunos campos, revisa la información de tu cuenta.');
        //return redirect('/')->withErrors($validator)->withInput();
        return view('store.perfil.edit', compact('client','provinces'))->withErrors($validator);
    }else{
    	$the_users = new User;
    	$client->fill($request->all());
    	$updated = $client->save();
    	$perfil = $client->select()->where('users_id', '=', $client)->first();
    	$users = $the_users->select()->where('id','=', $client->users_id)->first();
    	$provinces = Province::orderBy('id', 'desc')->lists('prov','id');
    	\Session::flash('flash_message', 'Información de perfil actualizada correctamente');
        return redirect('/');
    }
}

public function changepass(){
    $token = new User;
    $token->comfirm_token=str_random(255);
    $email = \Auth::user()->email;

    return view('store.perfil.chanpass',compact('token','email'));
}

public function uploadImg(){
    $file = Input::file('image');
    $random = str_random(10);
    $nombre = $random.$file->getClientOriginalName();
    $path = public_path('upload/'.$nombre);
    $url ='/upload/'.$nombre;
    $image = Image::make($file->getRealPath());
    $image->save($path);
    return '<img src="'.$url.'" />';
}

public function create(client $client){
    $provinces = Province::orderBy('id', 'desc')->lists('prov','id');
    return view('store.perfil.create', compact('client','provinces'));
}

public function store(Request $request){
    client::create($request->all());
    return "creado";
        //$datos = $request->all();
        //dd($datos);
}

public function updatepass(Request $request,User $user){        
    $id_us = Auth::user()->id;
    $p= User::find($id_us);
    $p->fill($request->all());
    $p->password=bcrypt($request->password);
    $p->comfirm_token=str_random(255);
    $p->save();



        //\Session::flash('flash_message', 'Su clave a sido actualizada correctamente, porfavor inicio sessión');
        //\Session::flush();

    $message = $p ? 'Su clave a sido actualizada correctamente, porfavor iniciar sessión con su nueva clave': 'No se pudo realizar los cambios';        
    \Session::flush();
    \Auth::logout();
    \Session::flash('flash_message', $message);        
    return redirect()->route('home');
        //return redirect()->route('store.perfil.perfil',compact('client'))
        //return view('store.perfil.perfil',compact('client'));
        //dd($request);
}

}
