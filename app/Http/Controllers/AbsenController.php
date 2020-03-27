<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\Guru;

class AbsenController extends Controller
{
    public function index()
    {
    	$absen = Absen::all();
    	return view('absen.index',compact('absen'));
    }

    public function store(Request $request)
    {
    	$guru = Guru::where('user_id',$request->id)->first();
    	$absen = Absen::create([
    		'nip' => $request->nip,
    		'guru_id' => $guru->id,
    		'nama' => $request->nama,
    	]);
    	$data = [
    		"status" => 1,
    		"message" => "Berhasil"
    	];
    	return response()->json($data);
    }

    public function result()
    {
    	
    	// $all = Absen::first();
    	// $all->absen = Absen::all();
    	$all = Absen::all();
    	return response()->json($all);
    }
}
