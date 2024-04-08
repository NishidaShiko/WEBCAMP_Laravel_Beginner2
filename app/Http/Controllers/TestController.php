<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * トップページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('test.index');
    }
    
    public function input(Request $repuest)
    {
        // 
        $email = $request->input('email');
        $pass = $request->input('password');
        var_dump($email, $pass); exit;
        
        // return view('test input');
        
    }
}
