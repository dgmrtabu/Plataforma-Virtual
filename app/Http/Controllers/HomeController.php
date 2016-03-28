<?php

namespace Muserpol\Http\Controllers;

use Illuminate\Http\Request;

use Muserpol\Http\Requests;
use Muserpol\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function showIndex()
	{
		// $anios = DB::table('aportes')->select(DB::raw('DISTINCT (aportes.anio ) anio'))->get();
		
  //       $i=0; $a = $request->anio;
  //       foreach ($anios as $item) {
  //           $anio = $item->anio;
  //           if($i==$a)
  //           {break;}
  //           $i++;
  //       }

  //       $totalRegistros = DB::table('aportes')
  //               ->select(DB::raw('COUNT(*) registros, SUM(aportes.sue) sueldo, SUM(aportes.b_ant) anti,
  //                               SUM(aportes.b_est) b_est, SUM(aportes.b_car) b_car,
  //                               SUM(aportes.b_fro) b_fro, SUM(aportes.b_ori) b_ori,
  //                               SUM(aportes.b_seg) b_seg, SUM(aportes.gan) gan, SUM(aportes.mus) mus'))
  //                               ->where('aportes.mes', '=', $request->mes)
  //                               ->where('aportes.anio', '=', $anio)
  //                                   ->get();
  //       foreach ($totalRegistros as $item) {
  //           $registros = $item->registros;
  //           $sueldo = $item->sueldo;
  //           $anti = $item->anti;
  //           $b_est = $item->b_est;
  //           $b_car = $item->b_car;
  //           $b_fro = $item->b_fro;
  //           $b_ori = $item->b_ori;
  //           $b_seg = $item->b_seg;
  //           $gan = $item->gan;
  //           $mus = $item->mus;
  //       }

  //       $anios = array('9' => '19','0' => '20','1' => '20','2' => '20','3' => '20');
  //       $a = substr($anio, 0, 1);
  //       $meses = array('01' => 'Enero','02' => 'Febrero','03' => 'Marzo','04' => 'Abril','05' => 'Mayo','06' => 'Junio','07' => 'Julio','08' => 'Agosto','09' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre');

  //       $data = array(
  //           'totalRegistros' => $registros,
  //           'totalSueldo' => Util::formatMoney($sueldo),
  //           'totalAnti' => Util::formatMoney($anti),
  //           'totalB_est' => Util::formatMoney($b_est),
  //           'totalB_car' => Util::formatMoney($b_car),
  //           'totalB_fro' => Util::formatMoney($b_fro),
  //           'totalB_ori' => Util::formatMoney($b_ori),
  //           'totalB_seg' => Util::formatMoney($b_seg),
  //           'totalGanado' => Util::formatMoney($gan),
  //           'totalMuserpol' => Util::formatMoney($mus),
  //           'anio' => $anios[$a] . $anio,
  //           'mes' => $meses[$request->mes]
  //       );

		// return view('home', $data);
        return view('home');

	}
}
