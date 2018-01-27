<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use app\

class UploadController extends Controller
{
    public function upload() {
      if(Input::hasFile('file')) {
        echo 'Uploaded';
        $file = Input::file('file');
        $file->move('uploads', $file->getClientOriginalName());
        echo '';
      }
    }

    public function store(Request $request) {
      $nome = $request -> input('name');
      $email = $request -> input('email');
      $opinion = $request -> input('opinion');

      Troca::create(['name' => $nome,
                    'email' => $email,
                    'opinion' => $opinion]);

      return view('welcome')

    }
}
