<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use Redirect;

class TransportationController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }

    public function transportation(){
      $data = Transportation::all();
      return view ('transportation')->with(['data'=>$data]);
    }
    public function add_transportation(){
      return view ('/create_form/add_transportation');
    }
    public function add_transportation_save(){
      Transportation::create(
          $this->request->except('_token')
      );
      return Redirect::route('transportation');
    }
    public function update_transportation($id){
      return view('/create_form/update_transportation')->with([
        'data' => Transportation::find($id)
      ]);
    }
    public function update_transportation_save($id){
      Transportation::find($id)->update(
        $this->request->except('_token')
      );
      return Redirect::route('transportation');
    }
    public function delete_transportation($id){
      Transportation::find($id)->delete();
      return Redirect::route('transportation');
    }
}
