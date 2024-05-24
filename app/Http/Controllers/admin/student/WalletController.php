<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\Controller;

use App\Repositories\Student\Wallet\WalletRepository;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //

    protected $walletRepo;
    public function __construct(WalletRepository $walletRepository)
    {
        $this->walletRepo = $walletRepository;
    }
    //Get All ACtive Wallets
    public function index()
    {
        $data = $this->walletRepo->getAllActiveWallets();
        return response()->json($data);
    }
    //Get All Wallet Transactions Depoist Widthraws And Payments
    public function getAllWalletsTransactions()
    {
        $data  = $this->walletRepo->getAllWalletTransactions();
        return response()->json($data);
    }


    //WisePaymentsForWalletBalance
    public function allWiseTopUpRequests()
    {
        $transactions = $this->walletRepo->getAllWisePayRequest();
        return response()->json($transactions);
    }
    //Get Wallet Data By Id Single
    public function getWalletDataSingle($id)
    {
        $data = $this->walletRepo->getWalletDataById($id);
        return response()->json($data);
    }
}
