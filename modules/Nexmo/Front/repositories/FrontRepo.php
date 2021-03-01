<?php


namespace Nexmo\Front\repositories;


use Nexmo\About\Models\About;
use Nexmo\Header\Models\Header;
use Nexmo\Portfolio\Models\Portfolio;
use Nexmo\Seo\Models\Seo;
use Nexmo\Skill\Models\Skill;
use function GuzzleHttp\Promise\all;

class FrontRepo
{

    public function seoOrderBy()
    {
        return Seo::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function headerOrderBy()
    {
        return Header::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function aboutAll()
    {
        return About::all();
    }


    public function skillAll()
    {
        return Skill::all();
    }

    public function skillOrder()
    {
        return Skill::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function portfoOrder()
    {
        return Portfolio::orderBy('id', 'desc')->take(1)->skip(0)->first();
    }

    public function portfoAll()
    {
        return Portfolio::all();
    }


}
