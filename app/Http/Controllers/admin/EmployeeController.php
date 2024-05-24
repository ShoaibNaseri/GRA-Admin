<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Employee\EmployeeRepository;

class EmployeeController extends Controller
{
    //

    protected $employeeRepo;
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepo = $employeeRepository;
    }

    public function getEmployee()
    {
        $empl = $this->employeeRepo->getEmployeeAll();
        return response()->json($empl);
    }
    public function getEmployeeSingle($id)
    {
        $emp = $this->employeeRepo->getEmployeeById($id);
        return response()->json($emp);
    }
}
