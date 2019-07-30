<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;

class PropraitaireController extends Controller
{


   public function index()
    {
     
        return view('proprietaire.index');
      
    }




      public function insert(Request $request)
    {



    	
       
        //	dd($request->all());
        	$file = $request->file('file');
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




            $art=Locataire::find($ar->id);

            if($request->type == 1 ) {

            if ($request->hasFile('file')){
         
            $art->cinpath=$file->storeAs('public/locataire/'.$ar->id,$file->getClientOriginalName()) ;
          }
          }


              $art->save();




            return redirect('/proprietaire');
        
    }

     public function update(Request $request,$id)
    {
       
       
        	
        
    }


     public function storeaf(Request $request)
    {
        return view('proprietaire.add');
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