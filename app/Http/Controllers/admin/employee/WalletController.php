<?php

namespace App\Http\Controllers\admin\employee;

use App\Http\Controllers\Controller;
use App\Repositories\Employee\Wallet\EmpWalletRepository;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    protected $empWalletRepo;
    public function __construct(EmpWalletRepository $empWalletRepository)
    {
        $this->empWalletRepo = $empWalletRepository;
    }
    public function index()
    {
        $dta = $this->empWalletRepo->getAllActiveWallets();
        return response()->json($dta);
    }
    public function getSingle($id)
    {
        $data = $this->empWalletRepo->getEmployeeWalletAllData($id);
        return response()->json($data);
    }
    public function getAllTransactions()
    {
        $trans = $this->empWalletRepo->getAllTransactions();
        return response()->json($trans);
    }
    public function getAllWidthraws()
    {
        $trans = $this->empWalletRepo->getAllWidthrawRequests();
        return response()->json($trans);
    }
}
