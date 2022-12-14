<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index()
    {
        return view('dashboard.profile.index');
    }
    function update(Request $request)
    {
        $request->validate([
            '_foto' => 'mimes:png,jpg,jpeg,gif',
            '_email' => 'required|email',
        ], [
            '_foto' => 'Foto yang dimasukkan hanya diperbolehkan jpeg,jpg,png',
            '_email.required' => 'Email wajib diisi',
            '_email.email' => 'Format email yang dimasukkan invalid'
        ]);

        if ($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);
            
            //kalo ada uodate foto baru
            $foto_lama = get_meta_value('_foto');
            File::delete(public_path('foto') . "/" . $foto_lama);

            metadata::updateOrCreate(['meta_key' => '_foto'], ['meta_value' => $foto_baru]);
        }

        metadata::updateOrCreate(['meta_key' => '_kota'], ['meta_value' => $request->kota]);
        metadata::updateOrCreate(['meta_key' => '_provinsi'], ['meta_value' => $request->provinsi]);
        metadata::updateOrCreate(['meta_key' => '_nohp'], ['meta_value' => $request->nohp]);
        metadata::updateOrCreate(['meta_key' => '_facebook'], ['meta_value' => $request->facebook]);
        metadata::updateOrCreate(['meta_key' => '_twitter'], ['meta_value' => $request->twitter]);
        metadata::updateOrCreate(['meta_key' => '_linkedin'], ['meta_value' => $request->linkedin]);
        metadata::updateOrCreate(['meta_key' => '_github'], ['meta_value' => $request->github]);
        metadata::updateOrCreate(['meta_key' => '_email'], ['meta_value' => $request->email]);

        return redirect()->route('profile.index')->with('success','Berhasil update profile');
    }
}
