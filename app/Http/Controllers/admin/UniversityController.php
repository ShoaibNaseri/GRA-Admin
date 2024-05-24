<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\University\UniversityRepository;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    //

    protected $uniRepo;
    public function __construct(UniversityRepository $universityRepository)
    {
        $this->uniRepo = $universityRepository;
    }
    public function getUnis()
    {
        $uni = $this->uniRepo->getAllUniversity();
        return response()->json($uni);
    }

    public function getSingleUni($id)
    {
        $uni = $this->uniRepo->getUniById($id);
        return response()->json($uni);
    }
}
