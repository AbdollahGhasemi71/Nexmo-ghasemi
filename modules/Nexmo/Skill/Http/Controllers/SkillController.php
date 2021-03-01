<?php

namespace Nexmo\Skill\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Skill\Http\Requests\SkillCreateRequest;
use Nexmo\Skill\Models\Skill;
use Nexmo\Skill\repositories\SkillRepo;

class SkillController extends Controller
{

    public $repo;
    public function __construct(SkillRepo $skillRepo)
    {
        $this->repo=$skillRepo;

    }
    public function index()
    {
        $skill=$this->repo->skillIndex();
        return view('Skill::skill.index',compact('skill'));
    }


    public function create()
    {
        return view('Skill::skill.create');
    }


    public function store(SkillCreateRequest $request)
    {
      $this->repo->skillStore($request);
      SessionFlash::store();
      return back();
    }

    public function edit($id)
    {
        $skill=$this->repo->skillEdit($id);
        return view('Skill::skill.update',compact('skill'));
    }

    public function update(SkillCreateRequest $request, $id)
    {
          $this->repo->skillUpdate($request,$id);
          SessionFlash::update();
          return redirect(route('skill.index'));
    }

    public function destroy($id)
    {
        $this->repo->skillDelete($id);
        SessionFlash::delete();
        return  back();
    }
}
