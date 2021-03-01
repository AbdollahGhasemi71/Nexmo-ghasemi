<?php

namespace Nexmo\Portfolio\Http\Controllers;

use Nexmo\Portfolio\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Portfolio\Http\Requests\PortfoCreateRequest;
use Nexmo\Portfolio\Http\Requests\PortfolioUpdateRequest;
use Nexmo\Portfolio\repositories\PortfoRepo;

class PortfolioController extends Controller
{
    public $repo;

    public function __construct(PortfoRepo $portfoRepo)
    {
        $this->repo = $portfoRepo;

    }

    public function index()
    {
        $portfo = $this->repo->portfoIndex();
        return view('Portfo::portfo.index', compact('portfo'));
    }


    public function create()
    {
        return view('Portfo::portfo.create');
    }


    public function store(PortfoCreateRequest $request)
    {
        $this->repo->portfoStore($request);
        SessionFlash::store();
        return redirect(route('portfo.create'));
    }

    public function edit($id)
    {
        $portfo = $this->repo->portfoEdit($id);
        return view('Portfo::portfo.edit', compact('portfo'));
    }


    public function update(PortfolioUpdateRequest $request, $id)
    {
        $this->repo->portfoUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('portfo.index'));
    }


    public function destroy($id)
    {
        $this->repo->portfoDelete($id);
        SessionFlash::delete();
        return back();
    }
}
