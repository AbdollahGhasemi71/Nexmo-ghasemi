<?php

namespace Nexmo\Skill\repositories;

use Nexmo\Skill\Models\Skill;

class SkillRepo
{
  public function skillIndex()
  {
      return Skill::paginate();
  }

  public function skillStore($vlaue)
  {
    Skill::create([
        'title'=>$vlaue->title,
        'body'=>$vlaue->body,
        'skill'=>$vlaue->skill,
        'spotted'=>$vlaue->spotted,
        'value'=>$vlaue->value
      ]);
  }

  public function skillEdit($id)
  {
      return Skill::findOrFail($id);
  }

  public function skillUpdate($value,$id)
  {
    $skill=Skill::findOrFail($id);
    $skill->update([
          'title'=>$value->title,
          'body'=>$value->body,
          'skill'=>$value->skill,
          'spotted'=>$value->spotted,
          'value'=>$value->value
    ]);
  }

  public function skillDelete($id)
  {
    $skill=Skill::findOrFail($id);
    $skill->delete();
  }

}
