<?php

namespace Nexmo\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use Nexmo\Front\repositories\FrontRepo;
use Nexmo\Seo\Models\Seo;

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
        $header=$this->repo->headerOrderBy();
        $about=$this->repo->aboutAll();
        $skill=$this->repo->skillAll();
        $skillOrder=$this->repo->skillOrder();
        $portfoOrder=$this->repo->portfoOrder();
        $portfo=$this->repo->portfoAll();
        return view('Front::front.index', compact('seo','header','about',
            'skill','skillOrder','portfoOrder','portfo'));
    }

    public function Portfolio()
    {
       return view('Front::front.partials.portflio');
    }
}
