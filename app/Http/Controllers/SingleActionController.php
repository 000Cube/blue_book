<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    public function __invoke(){
        return <<<EOF
        <h1>single</h1>
        <p>これはSingleActionコントローラーのアクションです</p>
        EOF;
    }
}
