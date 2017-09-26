<?php

namespace Troquer\Http\Controllers;

use Illuminate\Http\Request;
use Troquer\Skill;

class SkillsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
    $skills = Skill::orderBy('created_at', 'asc')->get();
    return view('registerSkills',[
      'skills'=>$skills
    ]);
  }
  public function register(Request $request){
    $skills = new Skill;
    $skills->skill_name = $request->skill_name;
    $skills->category_id = $request->category_id;
    $skills->save();
    return redirect('/staff');
  }
}
