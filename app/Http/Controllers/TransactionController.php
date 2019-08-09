<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Alert;
use PDF;
class TransactionController extends Controller
{
	public function index(){
		$transaction = Transaction::groupBy('code')->orderBy('id','DESC')->get();
		return view('admin.transaction.index',compact('transaction'));
    }
}    
