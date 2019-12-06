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

    public function air_history() {
        $airs = Air::orderBy('id_air', 'DESC')->limit(10)->get()->toArray();
        
        return view('air_history', ['airs' => $airs]);
        // $response = new \stdClass();

        // $current = Air::select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->orderBy('id_air', 'DESC')->get();

        // $response->penggunaan = $current[0]['total'];
        // $response->history = Air::orderBy('id_air', 'DESC')->limit(3)->get();
        // $response->akumulasi = $current;

        // return response()->json($response);
    }

    public function listrik_history() {
        $listriks = Listrik::orderBy('id_listrik', 'DESC')->limit(10)->get()->toArray();
        
        return view('energi_history', ['listriks' => $listriks]);
    }

    public function add_air(Request $request) {
        $data = $request->all();

        $tanggal = $data['date'];
        $kegiatan = $data['kegiatan'];
        $jumlah = $data['jumlah'];
        
        if ($kegiatan == 'Wudhu') {
            $total = 1.8 * $jumlah;
        }
        elseif ($kegiatan == 'Mandi') {
            $total = 10 * $jumlah;
        }
        elseif ($kegiatan == 'Cuci Peralatan') {
            $total = 8 * $jumlah;
        }
        elseif ($kegiatan == 'Lainnya') {
            $total = 20 * $jumlah;
        }

        Air::insert([
            'kegiatan' => $kegiatan,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'penggunaan' => $total
        ]);

        return redirect('air_history');
    }

    public function add_listrik(Request $request) {
        $data = $request->all();

        $tanggal = $data['date'];
        $alat = $data['alat'];
        $jumlah = $data['jumlah'];
        $lama_pakai = $data['lama_pakai'];

        if ($alat == 'Lampu Kecil') {
            $total = 0.06 * $lama_pakai * $jumlah;
        }
        elseif ($alat == 'Lampu Besar') {
            $total = 0.12 * $lama_pakai * $jumlah;
        }
        elseif ($alat == 'Kipas Angin') {
            $total = 0.24 * $lama_pakai * $jumlah;
        }
        elseif ($alat == 'AC') {
            $total = 1 * $lama_pakai * $jumlah;
        }
        elseif ($alat == 'Sound System') {
            $total = 2 * $lama_pakai * $jumlah;
        }

        Listrik::insert([
            'tanggal' => $tanggal,
            'alat' => $alat,
            'jumlah' => $jumlah,
            'lama_pakai' => $lama_pakai,
            'penggunaan' => $total
        ]);

        $sum_listrik = Listrik::where('tanggal', $tanggal)->select('tanggal', DB::raw('SUM(penggunaan) as total'))->groupBy('tanggal')->get()[0]['total'];
        if ($sum_listrik > 10) {
            $content = "Penggunaan listrik melebihi limit normal";
            $this->sendNotification($content);
        }

        return redirect('energi_history');
    }

    public function pinjam() {
        $content = "Pinjaman Anda sedang diproses";
        $this->sendNotification($content);

        return redirect('dashboard');
    }

    public static function sendNotification($content) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.thebigbox.id/sms-notification/1.0.0/messages');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=%2B6282361876115&content=".str_replace(' ', '%20', $content));

        $headers = array();
        $headers[] = 'Accept: application/x-www-form-urlencoded';
        $headers[] = 'X-Api-Key: MvktdBiBjTQo0YH9JiCrqmCuSYy2wf6m';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }
}