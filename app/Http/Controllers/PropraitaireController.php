<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use DB;
use DataTables;

class PropraitaireController extends Controller
{


   public function index()
    {
     
        return view('proprietaire.index');
      
    }




      public function insert(Request $request)
    {



    	
       
        //	dd($request->all());
  
            $ar= new Locataire();

        
            $ar->type=$request->input('type');

            if($request->input('type') == 1 ) {

 			$ar->civilite=$request->input('civilite');
            $ar->prenom=$request->input('prenom');
            $ar->nom=$request->input('nom');
            $ar->cin=$request->input('cin');

        
      }else {

            $ar->societe=$request->input('societe');
            $ar->ice=$request->input('ice');
            $ar->profession=$request->input('profession');
        }


             $ar->email=$request->input('email');
            $ar->tel=$request->input('tele');
            $ar->fax=$request->input('fax');



            $ar->adresse=$request->input('adrs');
            $ar->ville=$request->input('ville');
            $ar->pays=$request->input('pays');


            $ar->mode=1;
            $ar->archive=0;
         
            $ar->save();




        




            return redirect('/Proprietaire');
        
    }

     public function update(Request $request,$id)
    {
       
       
        	
        
    }


     public function storeaf()
    {
        return view('proprietaire.add');
    }

      public function storedocs()
    {
        return view('proprietaire.adddoc');
    }


     public function updateaf($id)
    {
    	$art=Locataire::find($id);
        return view('proprietaire.modifier',compact('art'));
    }

    
     public function View($id)
    {


        $art=Locataire::find($id);

      if($art->mode == 1){
      
        return view('proprietaire.view',compact('art'));}
        else return redirect('/proprietaire');


        
    }

     public function destroy($id)
    {
      $share = Locataire::find($id);
        $share->delete();
      return redirect('/Proprietaire');
     
    }



     public function archive($id)
    {
      $share = Locataire::find($id);
        $share->archive=1;
     $share->save();
      return redirect('/Proprietaire');
     
    }

    
    public function data(){


          
              


        $articles =Locataire::all()->where('mode','1')->where('archive','0');

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(Locataire $user) {
      if($user->type == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
     ->addColumn('biens', function(Locataire $user) {

        $imm =DB::table('biens')
            ->where('locataires_id', $user->id)
             ->get();



             $allth='';

                foreach($imm as $bb) {
               $allth .=   '<a href="/bien/'. $bb->id . '"    class="badge badge-primary"   data-toggle="tooltip" title="'. $bb->adresse . '" >' . $bb->Ref .  '</a><p></p>' ;
                      }
      
          return $allth ;
      
    })
       ->addColumn('action', function ($user) {
            
                return '
                  <a style="font-size: 20px" href="'. route('proparchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('propdelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })
         ->rawColumns(['biens' => 'biens','action' => 'action']) 
        ->toJson();



    }

     public function data2(){

        $articles2 =Locataire::all()->where('mode','1')->where('archive','1');

        
          return datatables()->of( $articles2)
    ->addColumn('Nom full', function(Locataire $user) {
      if($user->type == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
     ->addColumn('biens', function(Locataire $user) {

        $imm =DB::table('biens')
            ->where('locataires_id', $user->id)
             ->get();



             $allth='';

                foreach($imm as $bb) {
               $allth .=   '<a href="/bien/'. $bb->id . '"   data-toggle="tooltip" title="'. $bb->adresse . '" >' . $bb->Ref .  '</a><p></p>' ;
                      }
      
          return $allth ;
      
    })
         ->addColumn('action', function ($user) {
            
                return '
                  <a style="font-size: 20px" href="'. route('proparchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('propdelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })
         ->rawColumns(['biens' => 'biens','action' => 'action'])
        ->toJson();



    }









}