<?php

namespace Nexmo\About\Http\Controllers;

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
        $this->repo->update($request);
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
