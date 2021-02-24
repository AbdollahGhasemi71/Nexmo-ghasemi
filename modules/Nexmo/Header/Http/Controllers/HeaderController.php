<?php

namespace Nexmo\Header\Http\Controllers;


use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Header\Http\Requests\HeaderCreateRequest;
use Nexmo\Header\Http\Requests\HeaderUpdateRequest;
use Nexmo\Header\repositories\HeaderRepo;


class HeaderController extends Controller
{
    public $repo;

    public function __construct(HeaderRepo $headerRepo)
    {
        $this->repo = $headerRepo;

    }

    public function index()
    {
        $header = $this->repo->headerIndex();
        return view('Header::header.index', compact('header'));
    }


    public function create()
    {
        return view('Header::header.create');
    }


    public function store(HeaderCreateRequest $request)
    {
        $this->repo->headerStore($request);
        SessionFlash::store();
        return back();
    }

    public function edit($id)
    {
        $header = $this->repo->headerEdit($id);
        return view('Header::header.edit', compact('header'));
    }


    public function update(HeaderUpdateRequest $request, $id)
    {
        $this->repo->headerUpdate($request, $id);
        SessionFlash::store();
        return redirect(route('header.index'));


    }

    function destroy($id)
    {
        $this->repo->headerDelete($id);
        SessionFlash::delete();
        return back();
    }
}
