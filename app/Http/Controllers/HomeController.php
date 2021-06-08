<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Redirect;

class HomeController extends Controller
{
  protected $request;
  public function __construct(Request $request){
    $this->request=$request;
  }
  public function home(){
    return view ('index');
  }

  public function return(){
    return view ('return');
  }

  public function delivery(){
    return view ('delivery');
  }

  public function transportation(){
    return view ('transportation');
  }

  public function distribution(){
    return view ('distribution');
  }


  public function asset(){
    $data = Asset::all();
    return view ('asset')->with(['data'=>$data]);
  }
  public function add_asset(){
    return view ('/create_form/add_asset');
  }


  public function storage(){
    return view ('storage');
  }

  public function supplier(){
    return view ('supplier');
  }

}
