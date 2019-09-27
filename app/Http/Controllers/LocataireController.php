<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locataire;
use App\Bien;
use DataTables;
use DB;
use App\Quittance;


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
      return redirect('/Locataire');
     
    }



     public function archive($id)
    {
      $share = Locataire::find($id);
        $share->archive=1;
     $share->save();
      return redirect('/Locataire');
     
    }


    public function data(){

        $articles =Locataire::all()->where('mode','2')->where('archive','0');

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(Locataire $user) {
      if($user->type == 1) {
        return '<a   href="/Locataire/'.   $user->id.'/View"    >' .   $user->civilite . ' ' . $user->prenom . ' ' . $user->nom . '</a>'  ;
      } else {
         return '<a   href="/Locataire/'.   $user->id.'/View"    >' .  $user->societe . '</a>'  ;
      }
    })
    ->editColumn('tel', function(Locataire $user) {
      if($user->tel == '' ) {
       return  '<a     class="badge badge-info text-white"   data-toggle="tooltip"  > Aucun Telephone </a>' ;
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
    
              ->addColumn('action', function ($user) {
            
                return '
                <a style="font-size: 20px" href=""><i class="fa fa-edit bg-success" aria-hidden="true"></i></a>
                  <a style="font-size: 20px" href="'. route('locaarchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('locadelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })

      ->rawColumns(['bienloc' => 'bienloc','Nom full' => 'Nom full','tel' => 'tel','edit' => 'edit','action' => 'action'])  
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
           
                   ->addColumn('action', function ($user) {
            
                return '
                <a style="font-size: 20px" href=""><i class="fa fa-edit bg-success" aria-hidden="true"></i></a>
                  <a style="font-size: 20px" href="'. route('locaarchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('locadelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })

      ->rawColumns(['bienloc' => 'bienloc','tel' => 'tel','edit' => 'edit','action' => 'action'])  
    ->toJson();




    }



     public function dataquit($id)
    {
          
        $quitr =Quittance::orderBy('datequiitance','DESC')->
        join('locations', 'locations.id', '=', 'quittance.location_id')
        ->join('locataires', 'locataires.id', '=', 'locations.locataires_id')
        ->where('locataires.id', '=', $id)
          ->select('quittance.*')
          ->latest('id')
 


        ->get();

    /* $quitr = DB::table('quittance')
            ->join('locations', 'locations.id', '=', 'quittance.location_id')
            ->join('locataires', 'locataires.id', '=', 'locations.locataires_id')
              ->where('locataires.id', '=', $id);
            ->select('quittance.*')
            ->get();*/

            



          return datatables()->of($quitr)
    ->addColumn('Nom full', function(Quittance $user) {  
       
        return   $user->location->locataire->prenom . ' ' . $user->location->locataire->nom  ; 
        
    })
     ->addColumn('Bien', function(Quittance $user) {  
       
        return  $user->location->bien->Ref ; 
        
    })
      ->addColumn('Loyyer', function(Quittance $user) {  
       
        return  $user->loyer . ' MAD' ; 
        
    })
     ->addColumn('Date', function(Quittance $user) {



    return $this->dateToFrench($user->datequiitance, "F Y");     

        
    })
       ->editColumn('descrption', function(Quittance $user) {



        return    '<a    class="badge badge-info text-white"   data-toggle="tooltip" >' .  $user->descrption .  '</a>'  ; 

        
    })
        ->editColumn('Etat', function(Quittance $user) {


            if( $user->Etat == 'En retard')
        return    '<span class="label label-danger">En retard</span>'; 
    else 
      return '<span class="label label-success">Payé</span>';

        
    })
           ->addColumn('action', function ($user) {
            if( $user->Etat == 'En retard'){
                return '

        
 

               <a style="font-size: 20px"  href="'. route('recuvalide', $user->id).'"><i class="fa fa-check bg-success" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('deletequit', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

                    } else {        return '
                     
                    
                  <a style="font-size: 20px" href="'. route('recuquittance', $user->id).'"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
              
                  <a style="font-size: 20px" href="'. route('deletequit', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>

                  
                        ';}
            })

        ->rawColumns(['descrption' => 'descrption','Etat' => 'Etat','action' => 'action'])
       
    ->toJson();

        
      
    }


        public static function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}







}