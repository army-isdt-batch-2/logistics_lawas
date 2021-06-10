<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use Redirect;

class AssetController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }

  public function asset(){
    $data = Asset::all();
    return view ('asset')->with(['data'=>$data]);
  }
  public function add_asset(){
    return view ('/create_form/add_asset');
  }
  public function add_asset_save(){
    Asset::create(
        $this->request->except('_token')
    );
    return Redirect::route('asset');
  }
  public function update_asset($id){
    return view('/create_form/update_asset')->with([
      'data' => Asset::find($id)
    ]);
  }
  public function update_asset_save($id){
    Asset::find($id)->update(
      $this->request->except('_token')
    );
    return Redirect::route('asset');
  }
  public function delete_asset($id){
    Asset::find($id)->delete();
    return Redirect::route('asset');
    }
}
