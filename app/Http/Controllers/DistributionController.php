<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;
use Redirect;

class DistributionController extends Controller
{
  protected $request;
  public function __construct(Request $request)
    {
      $this->request=$request;
    }

    public function distribution(){
      $data = Distribution::all();
      return view ('distribution')->with(['data'=>$data]);
    }

    public function add_distribution(){
      return view ('/create_form/add_distribution');
    }

    public function add_distribution_save(){
      Distribution::create(
          $this->request->except('_token')
      );
      return Redirect::route('distribution');
    }

    public function update_distribution($id){
      return view('/create_form/update_distribution')->with([
        'data' => Distribution::find($id)
      ]);
    }

    public function update_distribution_save($id){
      Distribution::find($id)->update(
        $this->request->except('_token')
      );
      return Redirect::route('distribution');
    }

    public function delete_distribution($id){
      Distribution::find($id)->delete();
      return Redirect::route('distribution');
    }
}
