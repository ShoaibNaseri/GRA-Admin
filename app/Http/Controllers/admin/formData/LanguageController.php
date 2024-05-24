<?php

namespace App\Http\Controllers\admin\formData;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\FormData\LanguageRepository;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    protected $langRepo;
    public function __construct(LanguageRepository $languageRepository)
    {
        $this->langRepo = $languageRepository;
    }
    public function index()
    {
        $lang = $this->langRepo->getAll();
        return response()->json($lang);
    }
}
