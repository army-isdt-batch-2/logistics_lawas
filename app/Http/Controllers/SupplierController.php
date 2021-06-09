<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Redirect;

class SupplierController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }

  public function supplier(){
    $data = Supplier::all();
    return view ('supplier')->with(['data'=>$data]);
  }
  public function add_supplier(){
    return view ('/create_form/add_supplier');
  }
  public function save(){
    Supplier::create(
        $this->request->except('_token')
    );
    return Redirect::route('supplier');
    return view('supplier');
  }
}
