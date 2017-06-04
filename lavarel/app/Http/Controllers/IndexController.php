<?php
namespace App\Http\Controllers;
Class IndexController extends Controller{
    /**
     *
     */
    public function index(){
        $pdo = DB::connection()->getPdo();
        dd($pdo);
    }
}
?>