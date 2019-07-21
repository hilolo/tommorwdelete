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

          if ($request->hasFile('file')){
          	$ar->cinpath=$file->storeAs('public/proprietaire',$file->getClientOriginalName()) ;
          }

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
            return redirect('/proprietaire');
        
    }

     public function update(Request $request,$id)
    {
       
       
        	$file = $request->file('filee');
            $ar= Locataire::find($id);
        
            $ar->type=$request->input('colorRadio');
 			$ar->name=$request->input('name');
            $ar->email=$request->input('email');
            $ar->adresse=$request->input('Adresse');
            $ar->Telephone=$request->input('tele');
            $ar->NTVA=$request->input('ntva');
            $ar->Site_web=$request->input('site');
            $ar->FAX=$request->input('fax');
            
           if ($request->hasFile('filee')){
          	$ar->path_img=$file->storeAs('public/clients',$file->getClientOriginalName()) ;
          }
            $ar->save();
            return redirect('/Vente/'.$id.'/View');
        
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

    
     public function View()
    {
    	//$art=Locataire::find($id);
        //return view('proprietaire.view',compact('art'));

          return view('proprietaire.View');
    }

     public function destroy($id)
    {
      $share = Locataire::find($id);
     $share->delete();
      return redirect('/proprietaire');
     
    }
}