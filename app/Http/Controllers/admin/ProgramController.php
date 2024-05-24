<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Program\ProgramRepository;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //

    protected $scholarRepo;
    public function __construct(ProgramRepository $programRepository)
    {
        $this->scholarRepo = $programRepository;
    }
    public function getPrograms()
    {
        $program = $this->scholarRepo->getAllPrograms();
        return response()->json($program);
    }

    public function single($id)
    {
        $data = $this->scholarRepo->getProgById($id);
        return response()->json($data);
    }
}
