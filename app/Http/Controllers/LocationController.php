<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Locataire;

class LocationController extends Controller
{



    public function index()
    {
     
        return view('locataire.index');
      
    }





      public function insert(Request $request)
    {


        	
            $ar= new Location();
          

            return redirect('/Locataire');
        
    }

     public function update(Request $request,$id)
    {
       
       
        
        
    }


     public function storeaf(Request $request)
    {

    	$loc = Locataire::all()->where('mode', '2')->where('archive', '0');
    	return view('location.add',compact('loc'));
    }


     public function updateaf($id)
    {
    	$art=Locataire::find($id);
        return view('proprietaire.modifier',compact('art'));
    }

    
     public function View($id)
    {
    	$art=Locataire::find($id);

      if($art->mode == 2){
      
        return view('locataire.view',compact('art'));}
        else return redirect('/Locataire');


    
    }

     public function destroy($id)
    {
      $share = Locataire::find($id);
     $share->delete();
      return redirect('/proprietaire');
     
    }


    public function data(){

        $articles =Locataire::all()->where('mode','2')->where('archive','0');

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(Locataire $user) {
      if($user->type == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
    ->toJson();



    }

     public function data2(){

        $articles =Locataire::all()->where('mode','2')->where('archive','1');

          return datatables()->of( $articles)
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
