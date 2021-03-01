<?php

namespace Nexmo\About\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\About\Http\Requests\AboutcreateRequest;
use Nexmo\About\repositories\AboutRepo;
use Nexmo\Common\Session\SessionFlash;

class AboutController extends Controller
{
    public $repo;

    public function __construct(AboutRepo $aboutRepo)
    {
        $this->repo = $aboutRepo;
    }

    public function index()
    {
        $about = $this->repo->aboutIndex();
        return view('About::about.index', compact('about'));
    }

    public function create()
    {
        return view('About::about.create');
    }


    public function store(AboutcreateRequest $request)
    {
        $this->repo->aboutStore($request);
        SessionFlash::store();
        return back();
    }


    public function edit($id)
    {
        $about = $this->repo->aboutEdit($id);
        return view('About::about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->repo->aboutUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('about.index'));
    }


    public function destroy($id)
    {
       $this->repo->aboutDelete($id);
        SessionFlash::delete();
        return back();
    }
}
