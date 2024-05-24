<?php

namespace App\Http\Controllers\admin\formData;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\FormData\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    protected $countryRepo;
    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepo = $countryRepository;
    }
    public function getAll()
    {
        $country = $this->countryRepo->getAllCountries();

        return response()->json($country);
    }
}
