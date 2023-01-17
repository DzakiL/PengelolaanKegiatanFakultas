<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatan;
use App\Models\user;

class kegiatanController extends Controller
{

    public function index()
    {
        $kegiatan = kegiatan::all();
        return view('Main/kegiatan', ['kegiatan'=>$kegiatan]);
    }


    public function hapusKegiatan($Id)
    {
        kegiatan::table('kegiatan') -> where('kegiatan', $Id) -> delete();
        return redirect("Main/kegiatan");
    }

    public function tampilTambahKegiatan()
    {
        $user = user::all();
        return view('Tambah/TambahKegiatan', ['user'=>$user]);
    }

    public function tambahKegiatan(Request $request)
    {
        kegiatan::table('kegiatan') -> insert([
            'Id' => $request -> Id,
            'PembuatId' => $request -> PembuatId,
            'NamaKegiatan' => $request -> NamaKegiatan,
            'BidangKegiatan' => $request -> BidangKegiatan,
            'TglMulai' => $request -> TglMulai,
            'TglSelesai' => $request -> TglSelesai,
            'Status' => $request -> Status
        ]);
        return redirect('Main/kegiatan');
    }

    public function getEditKegiatan($Id)
    {
        $kegiatan = kegiatan::table('kegiatan') -> where('Id', $Id) -> get();
        return view('Edit/EditKegiatan', ['kegiatan' => $kegiatan]);
    }

    public function updateKegiatan(Request $request)
    {
        kegiatan::table('kegiatan') -> where('Id', $request -> Id) -> update(
            [
                'Id' => $request -> Id,
                'PembuatId' => $request -> PembuatId,
                'NamaKegiatan' => $request -> NamaKegiatan,
                'BidangKegiatan' => $request -> BidangKegiatan,
                'TglMulai' => $request -> TglMulai,
                'TglSelesai' => $request -> TglSelesai,
                'Status' => $request -> Status
            ]
        );
        return redirect('Main/kegiatan');
    }
}
