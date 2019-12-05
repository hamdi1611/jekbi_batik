<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Barang;
use App\Pinjam;

class BarangController extends Controller
{
    public function list_barang() {
        return Barang::get();
    }

    public function list_pinjam() {
        return Pinjam::get();
    }
}