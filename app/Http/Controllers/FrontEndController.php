<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use App\Models\Spesifikasi;
use App\Models\Pemilik;
use App\Models\Noker;
use App\Models\Service;
use Carbon\Carbon;

class FrontEndController extends Controller
{

    public function spesifikasi()
    {
        $data = Spesifikasi::all();
        if(Auth::check()){
            return view('dishub.index',compact('data'));
        }else{
            return redirect('login');
        }     
    }

    public function nomor()
    {
        $data = Noker::all();
        if(Auth::check()){
            return view('dishub.nomor',compact('data'));
        }else{
            return redirect('login');
        }     
    }
    public function pemilik()
    {
        $data = Pemilik::all();

        if(Auth::check()){
            return view('dishub.pemilik',compact('data'));
        }else{
            return redirect('login');
        }     
    }

    public function show($id)
    {
        $data = Spesifikasi::find($id);
        if(Auth::check()){
            return view('dishub.detail',compact('data'));
        }else{
            return redirect('login');
        }  
    }

    public function service(){
        $data = Service::all();
        if(Auth::check()){
            return view('dishub.service',compact('data'));
        }else{
            return redirect('login');
        }   
    }

    public function create()
    {
        if(Auth::check()){
            return view('dishub.tambah');
        }else{
            return redirect('login');
        } 
    }


    public function store(Request $request)
    {
        $spesifikasi = new Spesifikasi([
            'merk' => ucwords($request->get('merk')),
            'type' => ucwords($request->get('type')),
            'jenis' => ucwords($request->get('jenis')),
            'model' => ucwords($request->get('model'))
        ]);
        $spesifikasi-> save();

        $pemilik = new Pemilik([
            'spesifikasi_id' => $spesifikasi->id,
            'nama' => ucwords($request->get('nama')),
            'masa_stnk' => Carbon::parse($request->get('stnk'))->format('Y/m/d'),
            'masa_pajak' => Carbon::parse($request->get('pajak'))->format('Y/m/d'),
            'jabatan' => ucwords($request->get('jabatan')),
            'kondisi' => strtoupper($request->get('kondisi'))
        ]);

        $noker = new Noker([
            'spesifikasi_id' => $spesifikasi->id,
            'bpkb' => strtoupper($request->get('bpkb')),
            'plat' => strtoupper($request->get('plat')),
            'rangka' => strtoupper($request->get('rangka')),
            'mesin' => strtoupper($request->get('mesin'))
        ]);

        $service = new Service([
            'spesifikasi_id' => $spesifikasi->id,
            'tanggal_terakhir' => Carbon::parse($request->get('tanggal_terakhir'))->format('Y/m/d'),
            'jarak_tempuh' => ucwords($request->get('jarak_tempuh')),
            'biaya' => ucwords( $request->get('biaya')),
            'description' => ucwords($request->get('description')),
        ]);
        $service->save();
        $pemilik->save();
        $noker->save();
        return redirect('spesifikasi');
    }

    public function edit($id)
    {
        $data = Spesifikasi::find($id);
        return view('dishub.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $spesifikasi = Spesifikasi::find($id);
        $spesifikasi -> merk = ucwords($request->get('merk'));
        $spesifikasi -> type = ucwords($request->get('type'));
        $spesifikasi -> jenis = ucwords($request->get('jenis'));
        $spesifikasi -> model = ucwords($request->get('model'));
        $spesifikasi-> save();

        $pemilik = $spesifikasi->pemilik;
        $pemilik -> spesifikasi_id;
        $pemilik -> nama = ucwords($request->get('nama'));
        $pemilik -> masa_stnk = Carbon::parse($request->get('stnk'))->format('Y/m/d');
        $pemilik -> masa_pajak = Carbon::parse($request->get('pajak'))->format('Y/m/d');
        $pemilik -> jabatan = ucwords($request->get('jabatan'));
        $pemilik -> kondisi = strtoupper($request->get('kondisi'));

        $noker = $spesifikasi->noker;
        $noker -> spesifikasi_id;
        $noker -> bpkb = strtoupper($request->get('bpkb'));
        $noker -> plat = strtoupper($request->get('plat'));
        $noker -> rangka = strtoupper($request->get('rangka'));
        $noker -> mesin = strtoupper($request->get('mesin'));
        
        $service = $spesifikasi->service;
        $service -> spesifikasi_id;
        $service -> tanggal_terakhir =Carbon::parse($request->get('tanggal_terakhir'))->format('Y/m/d');
        $service -> jarak_tempuh = ucwords($request->get('jarak_tempuh'));
        $service -> biaya = ucwords($request->get('biaya'));
        $service -> description = ucwords($request->get('description'));

        $service->save();
        $pemilik->save();
        $noker->save();
        return redirect()->route('detail',$spesifikasi->id);
    }


    public function destroy($id)
    {
        $spesifikasi = Spesifikasi::find($id)->delete();
        $pemilik = Pemilik::where('spesifikasi_id',$id)->delete();
        $noker = Noker::where('spesifikasi_id',$id)->delete();
        $service = Service::where('spesifikasi_id',$id)->delete();
        return redirect('spesifikasi');
    }
}