<?php


namespace Nexmo\Front\repositories;


use Nexmo\About\Models\About;
use Nexmo\Header\Models\Header;
use Nexmo\Seo\Models\Seo;

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

}
