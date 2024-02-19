<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class HomeController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function reportproduct()
    {
        return view ('reportproduct');
    }
    public function contact()
    {
        return view ('contact');
    }
}
