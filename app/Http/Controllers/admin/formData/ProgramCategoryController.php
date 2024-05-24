<?php

namespace App\Http\Controllers\admin\formData;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\FormData\ProgramCategoryRepository;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    //

    protected $proCateRepo;
    public function __construct(ProgramCategoryRepository $programCategoryRepository)
    {
        $this->proCateRepo = $programCategoryRepository;
    }

    public function index()
    {
        $cats = $this->proCateRepo->getAll();
        return response()->json($cats);
    }
}
