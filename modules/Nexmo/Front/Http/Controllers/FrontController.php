<?php

namespace Nexmo\Front\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Nexmo\Contact\Models\Contact;
use Nexmo\Front\repositories\FrontRepo;


class FrontController extends Controller
{
    public $repo;

    public function __construct(FrontRepo $frontRepo)
    {
        $this->repo = $frontRepo;
    }

    public function index()
    {

        $seo = $this->repo->seoOrderBy();
        $header = $this->repo->headerOrderBy();
        $about = $this->repo->aboutAll();
        $skill = $this->repo->skillAll();
        $skillOrder = $this->repo->skillOrder();
        $portfoOrder = $this->repo->portfoOrder();
        $portfo = $this->repo->portfoAll();
        $contactBack = $this->repo->contactBackOrder();
        return view('Front::front.index', compact('seo', 'header', 'about',
            'skill', 'skillOrder', 'portfoOrder', 'portfo', 'contactBack'));
    }

    public function Contact(Request $request)
    {
        Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
    }


}
