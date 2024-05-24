<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student\Student;
use App\Repositories\Student\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    protected $studentRepo;
    public function __construct(StudentRepository $studentRepositroy)
    {
        $this->studentRepo = $studentRepositroy;
    }

    public function getStudent()
    {
        $student = $this->studentRepo->getAllStudent();
        return response()->json($student);
    }
    public function getSingleStudentDetails($id)
    {
        $data = $this->studentRepo->getStudentById($id);
        return response()->json($data);
    }
}
