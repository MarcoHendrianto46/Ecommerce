<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        return "ini dicetak  dari controller";
    }

    public function blog($id) {
        return "Ini function blog dengan id " .$id;
    }

    public function komentar($idblog, $idkomentar) {
        echo 'Id Blognya : ' .$idblog;
        echo '<br/>';
        echo 'Id Komentar : ' .$idkomentar;
    }

    public function beranda() {
        $data = array('nama' => 'Marco Hendrianto');
        return view('beranda',$data);
    }

}
