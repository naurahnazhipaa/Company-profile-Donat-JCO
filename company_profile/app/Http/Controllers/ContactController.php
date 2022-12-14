<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contact.index')->with([
            'contact' => contact::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'namadepan' => 'required',
                'namabelakang' => 'required',
                'email' => 'required',
                'pesan' => 'required'
            ], [
                'namadepan.required' => 'judul wajib di isi',
                'namabelakang.required' => 'Nama Perusahaan wajib di isi',
                'email.required' => 'Tanggal Muaai wajib di isi'
            ]
        );

        $data = [
            'namadepan' =>$request->namadepan,
            'namabelakang' =>$request->namabelakang,
            'email' =>$request->email,
            'pesan' =>$request->pesan
        ];
        contact::create($data);

        return redirect('/')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit(contact $contact)
    {
        return view('dashboard.contact.edit', [
            'contact' => contact::where('id', $contact->id)->first(),
        ]);
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
                'namadepan' => 'required',
                'namabelakang' => 'required',
                'email' => 'required',
            ], [
                'namadepan.required' => 'Nama Depan wajib di isi',
                'namabelakang.required' => 'Nama belakang wajib di isi',
                'email.required' => 'email wajib di isi',
            ]
        );

        $data = [
            'namadepan' =>$request->namadepan,
            'namabelakang' =>$request->namabelakang,
            'email' =>$request->email,
            'pesan' =>$request->pesan
        ];
        contact::where('id',$id)->update($data);

        return redirect()->route('contact.index')->with('success', 'Berhasil mengupdate data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contact::where('id', $id)->delete();
        return redirect()->route('contact.index')->with('success', 'Berhasil delete data');
    }
}
