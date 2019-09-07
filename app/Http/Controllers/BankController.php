<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bancaire;

class BankController extends Controller
{
    public function storeaf($id)
    {
        return view('Bank.add',compact('id'));
    }


   public function insert(Request $request,$id)

    {

    
            $ar= new Bancaire();



        
            $ar->Banque=$request->input('Banque');
            $ar->RIB=$request->input('RIB');
            $ar->IBAN=$request->input('IBAN');
            $ar->Swift=$request->input('Swift');
            $ar->locataires_id=$id;

          	$ar->save();

           




            




            return redirect('/Locataire/' . $id . '/View');
        
    }


}
