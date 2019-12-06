<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Barang;
use App\Sharing;
use App\Sampah;

class BarangController extends Controller
{
    public function dashboard() {
        $barangs = Barang::orderBy('waktu_beli', 'DESC')->limit(3)->get()->toArray();
        
        return view('index', ['barangs' => $barangs]);
    }

    public function management_history() {
        $barangs = Barang::orderBy('waktu_beli', 'DESC')->get()->toArray();
        
        return view('management_history', ['barangs' => $barangs]);
    }

    public function sampah_history() {
        $barangs = Sampah::get()->toArray();
        
        return view('sampah_history', ['barangs' => $barangs]);
    }

    public function sharing() {
        $barangs = Sharing::get()->toArray();
        
        return view('sharing', ['barangs' => $barangs]);
    }

    public function add_sampah(Request $request) {
        $data = $request->all();

        $tanggal = $data['date'];
        $kegiatan = $data['kegiatan'];
        $jumlah = $data['jumlah'];
        
        if ($kegiatan == 'Buka Puasa(Takjil)') {
            $total = 0.02 * $jumlah;
        }
        elseif ($kegiatan == 'Buka Puasa(Makan Besar)') {
            $total = 0.07 * $jumlah;
        }
        elseif ($kegiatan == 'Buka Puasa(Minuman)') {
            $total = 0.03 * $jumlah;
        }
        elseif ($kegiatan == 'Lainnya') {
            $total = 0.1 * $jumlah;
        }

        Sampah::insert([
            'kegiatan' => $kegiatan,
            'tanggal' => $tanggal,
            'jumlah' => $jumlah,
            'total' => $total
        ]);

        return redirect('sampah_history');
    }

    public function add_management(Request $request) {
        $data = $request->all();

        $nama = $data['nama'];
        $jumlah = $data['jumlah'];
        $waktu_beli = $data['waktu_beli'];
        $waktu_expired = $data['waktu_expired'];
        $status = $data['status'];
        $kebijakan = $data['kebijakan'];
        $harga = $data['harga'];

        Barang::insert([
            'nama' => $nama,
            'jumlah' => $jumlah,
            'waktu_beli' => $waktu_beli,
            'waktu_expired' => $waktu_expired,
            'status' => $status,
            'kebijakan' => $kebijakan,
            'harga' => $harga
        ]);

        return redirect('management_history');
    }
}