<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Redirect;

class StorageController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }

  public function storage(){
    $data = Storage::all();
    return view ('storage')->with(['data'=>$data]);
  }
  public function add_storage(){
    return view ('/create_form/add_storage');
  }
  public function add_storage_save(){
    Storage::create(
        $this->request->except('_token')
    );
    return Redirect::route('storage');
  }
  public function update_storage($id){
    return view('/create_form/update_storage')->with([
      'data' => Storage::find($id)
    ]);
  }
  public function update_storage_save($id){
    Storage::find($id)->update(
      $this->request->except('_token')
    );
    return Redirect::route('storage');
  }
  public function delete_storage($id){
    Storage::find($id)->delete();
    return Redirect::route('storage');
    }
}
