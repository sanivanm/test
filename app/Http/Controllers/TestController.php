<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request){
        $request->all();
        return view('welcome', ['hola' => "holsa"]);
    }
}