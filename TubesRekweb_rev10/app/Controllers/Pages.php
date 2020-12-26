<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Pages extends BaseController
{

  protected $komikModel;

  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }

  public function index()
  {

    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $komik = $this->komikModel->search($keyword);
    } else {
      $komik = $this->komikModel;
    }

    $data = [
      'title' => "JhasonTeam",
      'komik' => $komik->paginate(3, 'komik')

    ];
    return view('pages/home', $data);
  }
  public function cariBuku()
  {
    $data = [
      'title' => 'Cari RBook!'
    ];
    return view('pages/cariBuku', $data);
  }
}
