<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Air;
use App\Listrik;

class AirListrikController extends Controller
{
    public function dashboard() {
        return 0;
    }

    public function air() {
        $response = new \stdClass();

        $current = Air::select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->orderBy('id_air', 'DESC')->limit(1)->get();

        $response->penggunaan = $current[0]['total'];
        $response->history = Air::orderBy('id_air', 'DESC')->limit(3)->get();

        return response()->json($response);
    }

    public function listrik() {
        $response = new \stdClass();

        $current = Listrik::select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->orderBy('id_listrik', 'DESC')->limit(1)->get();

        $response->penggunaan = $current[0]['total'];
        $response->history = Listrik::orderBy('id_listrik', 'DESC')->limit(3)->get();

        return response()->json($response);
    }

    public function add_air(Request $request) {
        $data = $request->all();

        $tanggal = date('Y-m-d');
        $kegiatan = $data['kegiatan'];

        return [$kegiatan, $tanggal];
    }
}