<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Locataire;
use App\Bien;

class LocationController extends Controller
{



    public function index()
    {
     
        return view('location.index');
      
    }





      public function insert(Request $request)
    {     

          //dd($request->all());
            
        $ar= new Location();

        $user = strstr($request->datetimes, '-', true); 
        $RARA=str_replace(' ', '', $user);
        $dated=str_replace('/', '-', $RARA);

        $user2 = strstr($request->datetimes, '-', false);
        $aq21=str_replace('-', '', $user2);
        $RARA2=str_replace(' ', '', $aq21);
        $datef=str_replace('/', '-', $aq21);

         $ar->biens_id= 
         $ar->type_bail=$request->input('typebb');
         $ar->date_debutbail=$dated;
         $ar->date_finbail=$datef;
         $ar->paiment_methode=$request->input('paimmeth');
         $ar->moyen_paiment=$request->input('moyenp');
         $ar->paiment_jour=$request->input('jpaiment');


         
         $ar->archiveloc=0;

        	
            if($request->input('prop') == 0 ) {

            if($request->input('type') == 1 ) {

              $aqs= new Locataire();

             $aqs->type=1;
              $aqs->mode=2;
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
              $aqs->mode=2;
            $aqs->societe=$request->input('socite');
            $aqs->ice=$request->input('ice');
            $aqs->profession=$request->input('profession');
            $aqs->loyer=$request->input('loyer');
            $aqs->archive=0;;
            $aqs->save();
             
          $ar->locataires_id=$aqs->id;
        }

      }else $ar->locataires_id=$request->input('prop');

    $ar->save(); 

      $file = $request->file('file');
      $art=Location::find($ar->id);

       
            if ($request->hasFile('file')){
            $art->path_contrat=$file->storeAs('public/location/'.$ar->id,$file->getClientOriginalName()) ;
          }
      $art->save();    
                   


             



        
        
    }

     public function update(Request $request,$id)
    {
       
       
        
        
    }


     public function storeaf(Request $request)
    {

      $loc = Bien::all()->where('archiveb', '0');
    	$loc2 = Locataire::all()->where('mode', '2')->where('archive', '0');
    	return view('location.add',compact('loc','loc2'));
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

        $articles =location::all()->where('archiveloc','0');
      

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(location $user) {  
     
        return  $user->locataire->civilite . ' ' . $user->locataire->prenom . ' ' . $user->locataire->nom  ; 
        
    })
    ->addColumn('biens', function(location $user) {  
        return  $user->bien->Ref . ' ' . $user->bien->adresse   ; 
        
    })
     ->editColumn('loyer', function(location $user) {  
        return  $user->loyer . ' MAD'  ; 
        
    })
         ->addColumn('duro', function(location $user) {
     
        return    '<a    class="badge badge-info text-white"   data-toggle="tooltip" >' . $user->date_debutbail . ' => ' 
               . $user->date_debutbail .   '</a>'  ;
    
    })
   ->addColumn('edit', function(location $user) {
     
        return    '<div class="dropdown">
              <button class="btn btn-xs btn-outline btn-info dropdown-toggle" type="button" data-toggle="dropdown">  .....  </button>
              <div class="dropdown-menu">
                <a class="dropdown-item flexbox" href="#">
                <span>Inbox</span>
                </a>
                <a class="dropdown-item" href="#">Sent</a>
                <a class="dropdown-item" href="#">Spam</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item flexbox" href="#">
                <span>Draft</span>
                <span class="badge badge-pill badge-default">1</span>
                </a>
              </div>
              </div>'  ;
    
    })
           ->rawColumns(['duro' => 'duro','edit' => 'edit'])  
    ->toJson();



    }

     public function data2(){

        $articles =Locataire::all()->where('mode','2')->where('archive','1');

      
          return datatables()->of( $articles)
    ->addColumn('Nomfull', function(location $user) {  
     
        return  $user->locataire->civilite . ' ' . $user->locataire->prenom . ' ' . $user->locataire->nom  ; 
        
    })
    ->addColumn('bbi', function(location $user) {  
        return  $user->bien->Ref . ' ' . $user->bien->adresse   ; 
        
    })
     ->editColumn('loyer', function(location $user) {  
        return  $user->loyer . ' MAD'  ; 
        
    })
    ->toJson();



    }




}
