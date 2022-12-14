<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function index(){
        return view('dashboard.skill.index');
    }
    public function update(Request $request) {
        if ($request->method()== 'POST') {
            $request->validate([
                '_language' =>'required',
                '_workflow' =>'required',
            ],[
                '_language.required' => 'Silahkan masukkan bahasa pemrograman yang kamu kuasai',
                '_workflow.required' => 'Silahkan masukkan workflow yang kamu kuasai'
            ]);

            metadata::updateOrCreate(['meta_key']);
        }
    }
}
