<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bancaire;
use App\Locataire;

class BankController extends Controller
{


      public function index()
    {


        return view('bank.index');
      
    }




    public function storeaf($id)
    {
        return view('bank.add',compact('id'));
    }




     public function storeaf2()
    {

           $loc2 = Locataire::all()->where('archive', '0'); 
        return view('bank.add2',compact('loc2'));
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

           
            




     return redirect('/Banks');
        
    }




     public function insert2(Request $request)

    {

    
            $ar= new Bancaire();



        
            $ar->Banque=$request->input('Banque');
            $ar->RIB=$request->input('RIB');
            $ar->IBAN=$request->input('IBAN');
            $ar->Swift=$request->input('Swift');
            $ar->locataires_id=$request->input('proqp');

            $ar->save();

           




            




     return redirect('/Banks');
        
    }





            public function destroy($id)
    {
      $share = Bancaire::find($id);
        $share->delete();
      return redirect('/Banks');
     
    }


     public function data(){

       $articles =Bancaire::all();
       

         return datatables()->of($articles)
          ->addColumn('swifti', function ($user) {
         
            
                return ''  .  $user->IBAN . ' / ' . $user->Swift ;
            })

          ->addColumn('action', function ($user) {
         
            
                return '
               <a style="font-size: 20px" href="'. route('banksdelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })

          ->addColumn('Nom', function(Bancaire $user) { 

         if($user->locataire->mode =='2') {
        return '<a   href="/Locataire/'.   $user->locataire->id.'/View"    >' .   $user->locataire->prenom . ' ' . $user->locataire->nom .   '</a>'  ; 
        
             }else {
                 return '<a   href="/Proprietaire/'.   $user->locataire->id.'/View"    >' .   $user->locataire->prenom . ' ' . $user->locataire->nom .   '</a>'  ; 


             }

         })
         ->rawColumns(['Nom' => 'Nom','action' => 'action'])

    ->toJson();


    }










}
