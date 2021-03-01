<?php

namespace Nexmo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Contact\Models\Contact;
use Nexmo\Contact\repositories\ContactRepo;

class ContactController extends Controller
{
    public $repo;

    public function __construct(ContactRepo $contactRepo)
    {
        $this->repo = $contactRepo;
    }

    public function index()
    {
        $contact = $this->repo->contactIndex();
        return view('Contact::contact.index', compact('contact'));
    }


    public function destroy($id)
    {
        $this->repo->contactDelete($id);
        SessionFlash::delete();
        return back();
    }
}
