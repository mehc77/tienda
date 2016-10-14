<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Svlog;

class logsController extends Controller
{
	public function index()
	{
		$mensaje = "Ingreso en index";
		$area = "AUD";
		$date = Carbon::now();
		$datesegundos = Carbon::now();
		$datesegundos = $datesegundos->format('m-d-Y // H:i:s');


		$date->timezone = new \DateTimeZone('America/Guayaquil');
		$date = $date->format('m-d-Y');

		$rutai = public_path();
		$ruta = str_replace("\\", "\\", $rutai);
		$dir = $ruta.'\\logs\\';
		$nombre_archivo = $dir;
		$usuario = \Auth::user()->name;

		$mensaje = $area.' '.$usuario.' '.$mensaje;

		if($archivo = fopen($nombre_archivo.'/'.$date, "a")){
			if(fwrite($archivo, "# ".$datesegundos. " ". $mensaje. "\n")){
				echo "Registrado un evento";
			}else{
				echo "problema al crear el archivo";
			}
			fclose($archivo);
		}  
	}



	public function gen()
	{
		$mensaje = 'Instancia mensaje';
		$area = 'Nueva Area';
		$logs = Svlog::log($mensaje,$area);
		dd($logs);
	}
}
