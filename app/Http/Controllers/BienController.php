<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bien;
use App\Locataire;
use DataTables;

class BienController extends Controller
{
 public function index()
    {
     
        return view('bien.bien.index');
      
    }




      public function insert(Request $request)
    {
            $ar= new Bien();



        
            $ar->type=$request->input('type');
            $ar->Ref=$request->input('ref');
            $ar->adresse=$request->input('adr');
            $ar->ville=$request->input('ville');
            $ar->pays=$request->input('pays');




            if($request->input('prop') == 0 ) {

            if($request->input('nvtype') == 1 ) {
              $aqs= new Locataire();

             $aqs->type=1;
              $aqs->mode=1;
 			      $aqs->civilite=$request->input('nvcivilite');
            $aqs->prenom=$request->input('nvprenom');
            $aqs->nom=$request->input('nvnom');
            $aqs->cin=$request->input('nvcin');
            $aqs->archive=0;
            $aqs->save();
             
            $ar->locataires_id=$aqs->id;

        
      }else {


            $aqs23= new Locataire();
            $aqs23->type=$request->input('nvtype');
            $aqs23->mode=1;
            $aqs23->societe=$request->input('nvsocite');
            $aqs23->ice=$request->input('nvice');
            $aqs23->profession=$request->input('nvprofession');
            $aqs->archive=0;
            $aqs23->save();

            $ar->locataires_id=$aqs23->id;
        }

      }else     $ar->pays=$request->input('pays');


          $ar->save();

           




            




            return redirect('/Biens');
        
    }

   


     public function storeaf(Request $request)
    {

    	$loc = Locataire::all()->where('mode', '1')->where('archive', '0');
      return view('bien.bien.add',compact('loc'));
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
      return redirect('/proprietaire');
     
    }

    
    public function data(){

    

      return DataTables::eloquent(Locataire::query())
    ->addColumn('Nom full', function(Locataire $user) {
      if($user->type == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
    ->toJson();



    }


}