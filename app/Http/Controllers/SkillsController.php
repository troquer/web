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
    // $skills = Skill::orderBy('created_at', 'asc')->get();
    return view('registerSkills');
  }
  public function register(){
    $skills = new Skill;
    $skills->skill_name = $request->skill_name;
    $skills->skill_category = $request->skill_category;
    $skills->save();
    return redirect('/staff');
  }
}
