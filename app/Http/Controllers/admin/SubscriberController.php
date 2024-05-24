<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //

    public function getAll()
    {
        $subs = Subscriber::all();
        return response()->json($subs);
    }
}
