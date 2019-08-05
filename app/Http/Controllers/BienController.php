<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bien;
use App\Locataire;
use DataTables;
use DB;
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
            $ar->archiveb=0;






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

      }else     $ar->locataires_id=$request->input('prop');


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

      
             $articles =DB::table('biens')
             ->where('archiveb','0')
             ->join('locataires', 'locataires.id', '=', 'biens.locataires_id')
             ->select('locataires.*', 'biens.*', 'biens.type as tttype', 'locataires.type as tqttype')
             ->get();

      return datatables()->of( $articles)
       ->addColumn('adrs full', function( $user) {
        return  $user->Ref . ' ' . $user->adresse  ;
    })
    ->addColumn('Nom full', function( $user) {
      if($user->tqttype == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
     ->addColumn('Atrr', function( $user) {
      if($user->tttype == 1) {
        return  'Appartements'  ;
      } else  if($user->tttype == 2) {
        return  'Villas'  ;
      } else  if($user->tttype == 3) {
        return  'Riads'  ;
      } else  if($user->tttype == 4) {
        return  'Bureaux'  ;
      } else  if($user->tttype == 5) {
        return  'Commerces'  ;
      } else  if($user->tttype == 6) {
        return  'Terrains'  ;
      } else  {
          return 'Autres biens' ;
      }
    })
    ->toJson();

    //return datatables()->of(Locataire::query())->toJson();



    }


     public function data2(){

    
             $articles =DB::table('biens')
             ->where('archiveb','1')
             ->join('locataires', 'locataires.id', '=', 'biens.locataires_id')
             ->select('locataires.*', 'biens.*', 'biens.type as tttype', 'locataires.type as tqttype')
             ->get();

      return datatables()->of( $articles)
       ->addColumn('adrs full', function( $user) {
        return  $user->Ref . ' ' . $user->adresse  ;
    })
    ->addColumn('Nom full', function( $user) {
      if($user->tqttype == 1) {
        return  $user->civilite . ' ' . $user->prenom . ' ' . $user->nom  ;
      } else {
          return  $user->societe ;
      }
    })
     ->addColumn('Atrr', function( $user) {
      if($user->tttype == 1) {
        return  'Appartements'  ;
      } else  if($user->tttype == 2) {
        return  'Villas'  ;
      } else  if($user->tttype == 3) {
        return  'Riads'  ;
      } else  if($user->tttype == 4) {
        return  'Bureaux'  ;
      } else  if($user->tttype == 5) {
        return  'Commerces'  ;
      } else  if($user->tttype == 6) {
        return  'Terrains'  ;
      } else  {
          return 'Autres biens' ;
      }
    })
    ->toJson();

    //return datatables()->of(Locataire::query())->toJson();



    }




}