<?php

namespace App\Http\Controllers\admin\formData;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doc;
use Illuminate\Http\Request;



//No Repsitory
class RequiredDocController extends Controller
{
    //
    public function index()
    {
        $doc = Doc::all();
        return response()->json($doc);
    }
}
