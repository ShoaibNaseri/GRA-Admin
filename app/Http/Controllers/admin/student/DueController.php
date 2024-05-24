<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\Controller;
use App\Repositories\Student\Due\StudentDueRepository;
use Illuminate\Http\Request;

class DueController extends Controller
{

    protected $studentDueRepo;
    public function __construct(StudentDueRepository $studentDueRepository)
    {
        $this->studentDueRepo = $studentDueRepository;
    }
    public function index()
    {
        $data = $this->studentDueRepo->getAllDues();
        return response()->json($data);
    }
    public function createDue(Request $request)
    {
        $data = request()->validate([
            'student_id' => 'required',
            'amount' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);
        $success = $this->studentDueRepo->saveDue($data);
        if ($success) {
            return response()->json(['message' => 'Success']);
        }
    }
}
