<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function storeaf($id)
    {
        return view('Bank.add',compact('id'));
    }

}
