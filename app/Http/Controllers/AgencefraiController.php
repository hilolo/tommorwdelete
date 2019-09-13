<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Agencefrai;
use NumberFormatter;
use PDF;



class AgencefraiController extends Controller
{
       public function index()
    {

        return view('frais.index');
      
    }




       public function storeaf()
    {

    		$loc2 = Location::all()->where('archiveloc', '0');
        return view('frais.add',compact('loc2'));
      
    }



        public function insert(Request $request)

    {

    
            $ar= new Agencefrai();


        
            
            $ar->description=$request->input('description');
            $ar->montant=$request->input('Montant');

            $art=Location::find($request->input('loca'));
            if($request->input('group2') == 'locataire' ){
            	$ar->locataires_id=$art->locataire->id;
            }
            else {
            	$ar->locataires_id=$art->bien->locataire->id ;
            	}

        
            $ar->adresse=$art->bien->adresse;

            $ar->archivefrais=0;

          	$ar->save();

           


            return redirect('/Fraisagence');
        
    }




        public function recu($id)
    {




     
       $ar= Agencefrai::find($id);

      $f = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
      $loertext=$f->format($ar->montant);



    

$ldate = date('Y-m-d H:i:s');

$pdf = PDF::loadView('frais.model',compact('ar','loertext','ldate'));
return $pdf->stream($ar->id .'.pdf');


      
    }




    public function data($id)

    {

    	if($id == '1')
     $articles =Agencefrai::all()->where('archivefrais','0');
 else $articles =Agencefrai::all()->where('archivefrais','1');

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(Agencefrai $user) {
        return '<a   href="/Locataire/'.   $user->locataire->id.'/View"    >'  .  $user->locataire->prenom . ' ' .  $user->locataire->nom . ' ' .  $user->locataire->societe . '</a>' ;
    })

     ->addColumn('montantq', function(Agencefrai $user) {
        return    $user->montant . ' MAD';
    })
       ->addColumn('date', function(Agencefrai $user) {
        return    $user->created_at->format('Y-m-d') ;
    })

       ->addColumn('action', function ($user) {
            
                return '
               <a style="font-size: 20px" href="'. route('fraisrecu', $user->id).'"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                  <a style="font-size: 20px" href="'. route('fraisarchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('fraisdelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })
         ->rawColumns(['Nom full' => 'Nom full','action' => 'action']) 
        ->toJson();



    }





          public function destroy($id)
    {
      $share = Agencefrai::find($id);
        $share->delete();
      return redirect('/Fraisagence');
     
    }


           public function Archive($id)
    {
      $ar = Agencefrai::find($id);
       $ar->archivefrais=1;
       $ar->save();
      return redirect('/Fraisagence');

       }
     









    


    
}
