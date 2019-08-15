<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use App\Bien;
use DataTables;
use DB;

class LocataireController extends Controller
{
 
   public function index()
    {
     
        return view('locataire.index');
      
    }





      public function insert(Request $request)
    {


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


            $ar->mode=2;
            $ar->archive=0;
         
            $ar->save();

                 

            

            return redirect('/Locataire');
        
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
        return view('locataire.add');
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
    ->editColumn('tel', function(Locataire $user) {
      if($user->tel == '' ) {
       return  '<a     class="badge badge-info text-white"   data-toggle="tooltip"  > Aucun Location </a>' ;
      } else {
          return  $user->tel ;
      }
    })
         ->addColumn('bienloc', function(Locataire $user) {
     

        $imm =DB::table('locations')
            ->where('locataires_id', $user->id)
             ->get();
             
            

            $articles =Locataire::all()->where('mode','2')->where('archive','0');

        if ($imm->isEmpty()) {
         
          return  '<a href="/Location/Add"    class="badge badge-info "     > Aucun Location </a>' ;
          }
          else  
          { 


             $allth='';
             $imstupid=0;
                foreach($imm as $bb) {
                  $aq = Bien::find($bb->biens_id);

               $allth .=   '<a href="/bien/'. $aq->id . '"    class="badge badge-primary"   data-toggle="tooltip" title="'. $aq->adresse . '" >' . $aq->Ref  . ' | ' . $bb->date_debutbail . '=>' 
               . $bb->date_debutbail . ' | ' . $bb->loyer . ' MAD' .    '</a>' ;
              $imstupid++;
               if($imstupid >= 2) $allth .= '<p></p>';
                      }

      
          return  $allth ;
          }

      
    })
         ->rawColumns(['bienloc' => 'bienloc','tel' => 'tel'])  
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
    ->editColumn('tel', function(Locataire $user) {
      if($user->tel == '' ) {
       return  '<a     class="badge badge-info text-white"   data-toggle="tooltip"  > Aucun Location </a>' ;
      } else {
          return  $user->tel ;
      }
    })
         ->addColumn('bienloc', function(Locataire $user) {
     

        $imm =DB::table('locations')
            ->where('locataires_id', $user->id)
             ->get();
             
            

            $articles =Locataire::all()->where('mode','2')->where('archive','0');

        if ($imm->isEmpty()) {
         
          return  '<a href="/Location/Add"    class="badge badge-info "     > Aucun Location </a>' ;
          }
          else  
          { 


             $allth='';
             $imstupid=0;
                foreach($imm as $bb) {
                  $aq = Bien::find($bb->biens_id);

               $allth .=   '<a href="/bien/'. $aq->id . '"    class="badge badge-primary"   data-toggle="tooltip" title="'. $aq->adresse . '" >' . $aq->Ref  . ' | ' . $bb->date_debutbail . '=>' 
               . $bb->date_debutbail . ' | ' . $bb->loyer . ' MAD' .    '</a>' ;
              $imstupid++;
               if($imstupid >= 2) $allth .= '<p></p>';
                      }

      
          return  $allth ;
          }

      
    })
         ->rawColumns(['bienloc' => 'bienloc','tel' => 'tel'])  
    ->toJson();




    }




}