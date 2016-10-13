<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pedido;
use Carbon\Carbon;

class MapController extends Controller
{
	public function index(){
		if(\Auth::check()){
			if(\Auth::user()->is_admin){
				$date = Carbon::now();
				$date->timezone = new \DateTimeZone('America/Guayaquil');
				$date = $date->format('d/m/Y');
				$locations = \DB::table('pedido')
				->join('status','pedido.status_id','=','status.id')
				->select(\DB::raw('pedido.id as pedido,pedido.entrega, pedido.ubiclt as lat ,pedido.ubiclg as lng,status.statu as estado'))->where('pedido.date','=',$date)->where('pedido.ubiclg','!=','0')->where('pedido.ubiclt','!=','0')->get();
				$contadorpedidos =count($locations);
				return view('admin.mapa.index',compact('locations','contadorpedidos'));
			}else{
				\Auth::logout();
				return redirect('login');
			}
		}else{
			\Auth::logout();
		}
	}




}