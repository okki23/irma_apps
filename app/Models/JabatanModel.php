<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JabatanModel extends Model
{
    public $tablename = 'jabatan'; 
    use HasFactory;
    
    public function allData(){
        return DB::table($this->tablename)->get();
    }
}
