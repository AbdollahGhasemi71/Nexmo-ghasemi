<?php

namespace Nexmo\ContactBack\Http\Controllers;

use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\ContactBack\Http\Requests\ContactBackcreateRequest;
use Nexmo\ContactBack\Models\ContactBack;
use Nexmo\ContactBack\repositories\ContactBackRepo;

class ContactBackend extends Controller
{
    public $repo;

    public function __construct(ContactBackRepo $contactBackRepo)
    {
        $this->repo = $contactBackRepo;
    }

    public function index()
    {
        $contact = $this->repo->contactBackIndex();
        return view('ContactBack::contact.index', compact('contact'));
    }

    function create()
    {
        return view('ContactBack::contact.create');
    }


    public function store(ContactBackcreateRequest $request)
    {
        $this->repo->contactbackStore($request);
        SessionFlash::store();
        return back();
    }


    public function edit($id)
    {
        $contact = $this->repo->contactbackEdit($id);
        return view('ContactBack::contact.edit', compact('contact'));
    }

    public function update(ContactBackcreateRequest $request, $id)
    {
        $this->repo->contactbackUpdate($request, $id);
        SessionFlash::update();
        return redirect(route('contact-backend.index'));
    }

    public function destroy($id)
    {
        $this->repo->contactbackDelete($id);
        SessionFlash::delete();
        return back();
    }
}
