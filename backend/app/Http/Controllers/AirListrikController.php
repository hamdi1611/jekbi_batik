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

        $current = Air::select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->orderBy('id_air', 'DESC')->get();

        $response->penggunaan = $current[0]['total'];
        $response->history = Air::orderBy('id_air', 'DESC')->limit(3)->get();
        $response->akumulasi = $current;

        return response()->json($response);
    }

    public function listrik() {
        $response = new \stdClass();

        $current = Listrik::select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->orderBy('id_listrik', 'DESC')->limit(1)->get();

        $response->penggunaan = $current[0]['total'];
        $response->history = Listrik::orderBy('id_listrik', 'DESC')->limit(3)->get();
        $response->akumulasi = $current;

        return response()->json($response);
    }

    public function add_air(Request $request) {
        $data = $request->all();

        $tanggal = date('Y-m-d');
        $kegiatan = $data['kegiatan'];

        return [$kegiatan, $tanggal];
    }

    public function add_listrik(Request $request) {
        $data = $request->all();

        $tanggal = date('Y-m-d');
        $kegiatan = $data['kegiatan'];

        // if (blablabla) {
        //     $this->sendNotification($kegiatan)
        // }

        return $kegiatan;
    }

    public static function sendNotification($content) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.thebigbox.id/sms-notification/1.0.0/messages');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=%2B6282361876115&content=".str_replace(' ', '%20', $content));

        $headers = array();
        $headers[] = 'Accept: application/x-www-form-urlencoded';
        $headers[] = 'X-Api-Key: g5ITMRLwYC4or9c2ZJ1Mt7D211O4FOY3';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }
}