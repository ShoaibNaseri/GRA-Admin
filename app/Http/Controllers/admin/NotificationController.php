<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\NotificationRepository;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    protected $notificRepo;
    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificRepo = $notificationRepository;
    }

    public function getAll()
    {
        $nots = $this->notificRepo->getAllNoti();
        return response()->json($nots);
    }
}
