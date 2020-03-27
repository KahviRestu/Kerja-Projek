<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    public function create(Request $request)
    {
        // insert table users
        $user = new \App\User;
        $user->role = 'guru';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->nip);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $guru = \App\Guru::create($request->all());
        return redirect('/guru');
    }
    public function hapus($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();
        return redirect ('/guru');
    }

    public function update(Request $request){

        $id = $request->id;
        $update = Guru::where('id',$id)->update([
            'nip' => $request->Enip,
            'nama' => $request->Enama,
            'jk' => $request->Ejk,
            'tgl_lahir' => $request->Etgl_lahir,
            'alamat' => $request->Ealamat,
            'agama' => $request->Eagama,
            'email' => $request->Eemail,
            'nomor_telp' => $request->Enomor_telp
        ]);

         return redirect ('/guru');
        
    }

    public function login()
    {
        
        return view('auths.login');
    }
}
