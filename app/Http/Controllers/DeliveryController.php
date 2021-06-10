<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use Redirect;

class DeliveryController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }
    public function delivery(){
      $data = Delivery::all();
      return view ('delivery')->with(['data'=>$data]);
    }
    public function add_delivery(){
      return view ('/create_form/add_delivery');
    }
    public function add_delivery_save(){
      Delivery::create(
          $this->request->except('_token')
      );
      return Redirect::route('delivery');
    }
    public function update_delivery($id){
      return view('/create_form/update_delivery')->with([
        'data' => Delivery::find($id)
      ]);
    }
    public function update_delivery_save($id){
      Delivery::find($id)->update(
        $this->request->except('_token')
      );
      return Redirect::route('delivery');
    }
    public function delete_delivery($id){
      Delivery::find($id)->delete();
      return Redirect::route('delivery');
    }
}
