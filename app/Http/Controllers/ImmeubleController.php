<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immeuble;
use App\Bien;
use App\Locataire;
use App\Immeublebien;
use DB;
class ImmeubleController extends Controller
{
 
   public function index()
    {
     
        return view('bien.immeuble.index');
      
    }





      public function insert(Request $request)
    {


  

               $ar= new Immeuble();



        
            $ar->nom_immeuble=$request->input('name');
            $ar->adresseimm=$request->input('adrs');
            $ar->superficie=$request->input('superf');
            $ar->annconst=$request->input('anndis');
            $ar->archivei=0;






            if($request->input('prop') == 0 ) {

            if($request->input('type') == 1 ) {

              $aqs= new Locataire();

             $aqs->type=1;
              $aqs->mode=1;
 			      $aqs->civilite=$request->input('civilite');
            $aqs->prenom=$request->input('prenom');
            $aqs->nom=$request->input('nom');
            $aqs->cin=$request->input('cin');
            $aqs->archive=0;
            $aqs->save();
             
            $ar->locataires_id=$aqs->id;

        
      }else {


          
          
          
           

              $aqs= new Locataire();

             $aqs->type=2;
              $aqs->mode=1;
 			  $aqs->societe=$request->input('socite');
            $aqs->ice=$request->input('ice');
            $aqs->profession=$request->input('profession');
            $aqs->archive=0;;
            $aqs->save();
             
            $ar->locataires_id=$aqs->id;
        }

      }else     $ar->locataires_id=$request->input('prop');


          $ar->save();


             foreach ($request->get('ids') as $v) {
              $arq= new Immeublebien();
               $arq->biens_id = $v;
                $arq->immeubles_id = $ar->id;
              $arq->save();

          
               }


/*
 $ar= new Immeuble();
 $ar->save();*/

          
          

            return redirect('/Immeuble');
        
    }

     public function update(Request $request,$id)
    {
       
       
        	
    }


     public function storeaf(Request $request)
    {

    		$loc = Bien::all()->where('archiveb', '0');
    		$loc2 = Locataire::all()->where('mode', '1')->where('archive', '0');

        return view('bien.immeuble.add',compact('loc','loc2'));
    }


     public function updateaf($id)
    {
    	$art=Locataire::find($id);
        return view('proprietaire.modifier',compact('art'));
    }

    
     public function View($id)
     {

    
    }

     public function destroy($id)
    {

     
    }


    public function data(){

   



                
      


       $articles =Immeuble::all()->where('archivei', '0');
       

         return datatables()->of($articles)
       ->addColumn('biens', function(Immeuble $user) {

            $imm =DB::table('immeubles')
             ->join('immeublebiens', 'immeublebiens.immeubles_id', '=','immeubles.id' )
              ->join('biens', 'biens.id', '=', 'immeublebiens.biens_id')
            ->where('archivei', '0')
            ->where('immeubles.id',$user->id)
            ->select('immeubles.*', 'immeublebiens.*', 'biens.*')
             ->get();
              
            
            $RA = '';

             foreach($imm as $bb) {
               $RA .=  $bb->Ref . '  ' ;
                      }
                       

                      
                    return $RA;
                })

    ->toJson();


    }

     public function data2(){

       $articles =Immeuble::all()->where('archivei', '1');
       

         return datatables()->of($articles)
       ->addColumn('biens', function(Immeuble $user) {

            $imm =DB::table('immeubles')
             ->join('immeublebiens', 'immeublebiens.immeubles_id', '=','immeubles.id' )
              ->join('biens', 'biens.id', '=', 'immeublebiens.biens_id')
            ->where('archivei', '0')
            ->where('immeubles.id',$user->id)
            ->select('immeubles.*', 'immeublebiens.*', 'biens.*')
             ->get();
              
            
            $RA = '';

             foreach($imm as $bb) {
               $RA .=  $bb->Ref . '  ' ;
                      }
                       

                      
                    return $RA;
                })

    ->toJson();





    }




}