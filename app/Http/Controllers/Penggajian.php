<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PenggajianModel;

class Penggajian {
    public function __construct(){
        $this->PenggajianModel = new PenggajianModel(); 
    }
   
    public function index()
    { 
        $data = array('listing'=>$this->PenggajianModel->allData());
        return view('penggajian',$data);

    }

     
    public function create()
    { 
        $data = array('selectrekap'=>$this->PenggajianModel->selectrekap(),
                      'selecttunjangan'=>$this->PenggajianModel->selecttunjangan(),
                      'selectpotongan'=>$this->PenggajianModel->selectpotongan()
                    );
        return view('penggajian_create',$data);
    } 
    
     
    public function store(Request $request)
    {   
        $data = [
            'no_slip' => Request()->no_slip,
            'tanggal_slip' => Request()->tanggal_slip,
            'id_pengguna' => Request()->id_pengguna,
            'id_tunjangan' => Request()->id_tunjangan,
            'id_potongan' => Request()->id_potongan,
            'no_rekap' => Request()->no_rekap,
            'jumlah_lembur' => Request()->jumlah_lembur, 
        ];

        $this->PenggajianModel->savedata($data);
        return redirect()->route('pegawai')->with('pesan','Data Berhasil Ditambahkan!'); 
       
    }

     
    public function show($id)
    { 

    }

    
    public function edit($id)
    { 
        $data = array('listing'=>$this->PenggajianModel->getData($id),
                    'selectrekap'=>$this->PenggajianModel->selectrekap(),
                    'selecttunjangan'=>$this->PenggajianModel->selecttunjangan(),
                    'selectpotongan'=>$this->PenggajianModel->selectpotongan()
                );
        return view('pegawai_edit',$data);
    }

     
    public function update(Request $request)
    {
        $data = [
            'no_slip' => Request()->no_slip,
            'tanggal_slip' => Request()->tanggal_slip,
            'id_pengguna' => Request()->id_pengguna,
            'id_tunjangan' => Request()->id_tunjangan,
            'id_potongan' => Request()->id_potongan,
            'no_rekap' => Request()->no_rekap,
            'jumlah_lembur' => Request()->jumlah_lembur, 
        ];
        $id = Request()->id;
        $this->PenggajianModel->updateData($data,$id); 
        return redirect()->route('pegawai')->with('pesan','Data Berhasil Dirubah!');
    }

   
    public function destroy($id)
    {
        $this->PenggajianModel->deleteData($id);
        return redirect()->route('pegawai')->with('pesan','Data Berhasil Dihapus!');
    }
}
