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
  public function add_supplier_save(){
    Supplier::create(
        $this->request->except('_token')
    );
    return Redirect::route('supplier');
  }
  public function update_supplier($id){
    return view('/create_form/update_supplier')->with([
      'data' => Supplier::find($id)
    ]);
  }
  public function update_supplier_save($id){
    Supplier::find($id)->update(
      $this->request->except('_token')
    );
    return Redirect::route('supplier');
  }
  public function delete_supplier($id){
    Supplier::find($id)->delete();
    return Redirect::route('supplier');
    }
}
