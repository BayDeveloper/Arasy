<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    # process variable data or params
    # talk to the model
    # recieve from the model
    #compile or process data from the model if needed
    # pass that data to the correct view

    return view('pages.universal.welcome');
  }

  public function getAbout() {
    $first = 'Bayu';
    $last = 'Dev';
    $fullname = $first .' '.$last;
    $corp = 'BayDevloper';
    $data = [];
    $data['fullname'] = $fullname;
    $data['corp'] = $corp;

    //return view('pages.about')->withFullname($fullname)->withCorp($corp);
    return view('pages.universal.about')->withData($data);
  }

  public function getContact() {
    return view('pages.universal.contact');
  }

  public function getTcnewtrip(){
    return view('pages/form/tripconsultan/requestpelanggan');
  }
}

 ?>
