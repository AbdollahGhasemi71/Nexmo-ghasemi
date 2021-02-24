<?php


namespace Nexmo\Seo\repositories;


use Nexmo\Seo\Models\Seo;

class SeoRepo
{
    public function seoindex()
    {
        return Seo::paginate(4);
    }

    public function seoStore($value)
    {
        Seo::create([
            'title' => $value->title,
            'keywords' => $value->keywords,
            'description' => $value->description,
            'author' => $value->author
        ]);
    }

    public function seoEdit($id)
    {
        return Seo::findOrFail($id);
    }

    public function seoUpdate($id, $value)
    {
        $seo = Seo::findOrFail($id);
        $seo->update([
            'title' => $value->title,
            'description' => $value->description,
            'keywords' => $value->keywords,
            'author' => $value->author
        ]);
    }

    public function seoDelete($id)
    {
        return Seo::destroy($id);
    }


}
