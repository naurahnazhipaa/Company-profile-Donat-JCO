<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class educationController extends Controller
{
    function __construct()
    {
        $this->_tipe = 'education';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = riwayat::where('tipe',$this->_tipe)->orderBy('tgl_akhir','desc')->get();
        return view('dashboard.education.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('judul',$request->judul);
        Session::flash('info1',$request->info1);
        Session::flash('info2',$request->info2);
        Session::flash('info3',$request->info3);
        Session::flash('tgl_mulai',$request->tgl_mulai);
        Session::flash('tgl_akhir',$request->tgl_akhir);
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required'
            ], [
                'judul.required' => 'judul wajib di isi',
                'info1.required' => 'Nama Perusahaan wajib di isi',
                'tgl_mulai.required' => 'Tanggal Muaai wajib di isi'
            ]
        );

        $data = [
            'judul' =>$request->judul,
            'info1' =>$request->info1,
            'info2' =>$request->info2,
            'info3' =>$request->info3,
            'tipe' => $this->_tipe,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
        ];
        riwayat::create($data);

        return redirect()->route('education.index')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = riwayat::where('id',$id)->where('tipe',$this->_tipe)->first();
        return view('dashboard.education.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'info1' => 'required',
                'tgl_mulai' => 'required'
            ], [
                'judul.required' => 'judul wajib di isi',
                'info1.required' => 'Nama Perusahaan wajib di isi',
                'tgl_mulai.required' => 'Tanggal Muaai wajib di isi'
            ]
        );

        $data = [
            'judul' =>$request->judul,
            'info1' =>$request->info1,
            'info2' =>$request->info2,
            'info3' =>$request->info3,
            'tipe' => $this->_tipe,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
        ];
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->update($data);

        return redirect()->route('education.index')->with('success', 'Berhasil menambahkan data education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        riwayat::where('id', $id)->where('tipe',$this->_tipe)->delete();
        // return redirect()->route('education.index')->with('success', 'Berhasil delete data education');
        return response()->json(['status' => 'education Berhasil di hapus!']);
    }
}
