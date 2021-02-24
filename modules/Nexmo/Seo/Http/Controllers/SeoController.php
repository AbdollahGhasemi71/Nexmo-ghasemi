<?php

namespace Nexmo\Seo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Seo\Http\Requests\SeoCreateRequest;
use Nexmo\Seo\repositories\SeoRepo;

class SeoController extends Controller
{
    public $repo;

    public function __construct(SeoRepo $seoRepo)
    {
        $this->repo = $seoRepo;
    }

    public function index()
    {
        $seo = $this->repo->seoindex();
        return view('Seo::seo.index', compact('seo'));
    }

    function create()
    {
        return view('Seo::seo.create');
    }


    public function store(SeoCreateRequest $request)
    {
        $this->repo->seoStore($request);
        SessionFlash::store();
        return redirect(route('seo.create'));

    }


    public function edit($id)
    {
        $seo = $this->repo->seoEdit($id);
        return view('Seo::seo.edit', compact('seo'));
    }


    public function update(Request $request, $id)
    {
        $this->repo->seoUpdate($id, $request);
        SessionFlash::update();
        return redirect(route('seo.index'));
    }

    public function destroy($id)
    {
        $this->repo->seoDelete($id);
        SessionFlash::delete();
        return back();
    }
}
