<?php

namespace App\Http\Controllers;

use App\Models\dataPasien;
use App\Models\Obat;
use App\Models\riwayatPenyakit;
use App\Models\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base(){

        $dataPasien = dataPasien::count();
        $inap = riwayatPenyakit::where('status_pasien', 'Rawat Inap')->count();
        $jalan = riwayatPenyakit::where('status_pasien', 'Rawat jalan')->count();
        $obat = Obat::count();
        return view('Admin.template.index', compact('dataPasien', 'inap', 'jalan', 'obat'));
    }

}
