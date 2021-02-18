<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SeshaController extends Controller
{
    public function index(){
    	return "Halo ini adalah method index, dalam controller halamanutama.";
    }

    public function about(){
        return "<h1> Sesha Dwi Lestari <h1> \n NIM 1941720173 <h1> \n Kelas TI2A.";
    }

    public function article(){
        return view('Welcome');
    
    }
}
?>



