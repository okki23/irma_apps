<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

class Jabatan extends Controller 
{
    //
    public function __construct(){
        $this->JabatanModel = new JabatanModel(); 
    }
   
    public function index()
    { 
        $data = array('listing'=>$this->JabatanModel->allData());
        return view('jabatan',$data);

    }

     
    public function create()
    { 
        return view('pegawai_create');
    } 
    
     
    public function store(Request $request)
    {  
        $data = [
            'kode_pegawai' => Request()->kode_pegawai,
            'nama_lengkap' => Request()->nama_lengkap,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'jenkel' => Request()->jenkel,
            'no_hp' => Request()->no_hp,
            'email' => Request()->email,
            'alamat' => Request()->alamat,
            'id_jabatan' => Request()->id_jabatan
        ];

        $this->PegawaiModel->savedata($data);
        return redirect()->route('jabatan')->with('pesan','Data Berhasil Ditambahkan!'); 
       
    }

     
    public function show($id)
    { 

    }

    
    public function edit($id)
    {
        
    }

     
    public function update(Request $request, $id)
    {
         
    }

   
    public function destroy($id)
    {
       
    }
}
