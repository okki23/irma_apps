<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class Employee extends Controller
{
    //
    public function __construct(){
      $this->EmployeeModel = new EmployeeModel();
    }

    public function index() { 
        echo 1;
    }
}
