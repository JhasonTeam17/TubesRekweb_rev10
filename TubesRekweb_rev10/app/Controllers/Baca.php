<?php

namespace App\Controllers;

class Baca extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Baca RBook!'
        ];
        return view('baca/bacabuku', $data);
    }
}
