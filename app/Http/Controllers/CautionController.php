<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Location;
use App\Caution;
use NumberFormatter;
use PDF;


class CautionController extends Controller
{
     public function index()
    {

        return view('caution.index');
      
    }


       public function storeaf()
    {


    	$loc2 = Location::all()->where('archiveloc', '0');
        return view('caution.add',compact('loc2'));
      
    }



    public function insert(Request $request)

    {

    
            $ar= new Caution();



        
            $ar->nbrmois=$request->input('nbrmois');
            $ar->description=$request->input('description');
            $ar->montant=$request->input('Montant');
            $ar->locations_id=$request->input('loca');
            $ar->archivecaut=0;

          	$ar->save();

           


            return redirect('/Caution');
        
    }



       public function recu($id)
    {




     
       $ar= Caution::find($id);

      $f = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
      $loertext=$f->format($ar->montant);



    

$ldate = date('Y-m-d H:i:s');

$pdf = PDF::loadView('caution.modele',compact('ar','loertext','ldate'));
return $pdf->stream($ar->id .'.pdf');


      
    }


    





    public function data($id)

    {

    	if($id == '1')
     $articles =Caution::all()->where('archivecaut','0');
 else $articles =Caution::all()->where('archivecaut','1');

          return datatables()->of( $articles)
    ->addColumn('Nom full', function(Caution $user) {
        return '<a   href="/Locataire/'.   $user->location->locataire->id.'/View"    >'  .  $user->location->locataire->prenom . ' ' .  $user->location->locataire->nom . ' ' .  $user->location->locataire->societe . '</a>' ;
    })
     ->addColumn('infoloc', function(Caution $user) {
        return '' .   $user->location->bien->Ref . ' ' .  $user->location->bien->adresse ;
    })
     ->addColumn('montantq', function(Caution $user) {
        return    $user->montant . ' MAD';
    })

       ->addColumn('action', function ($user) {
            
                return '
               <a style="font-size: 20px" href="'. route('cautionrecu', $user->id).'"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                  <a style="font-size: 20px" href="'. route('cautionarchive', $user->id).'"><i class="fa fa-archive bg-info" aria-hidden="true"></i></a>
               <a style="font-size: 20px" href="'. route('cautiondelete', $user->id).'"><i class="fa fa-trash bg-danger" aria-hidden="true"></i></a>
               
 
                        ';

            })
         ->rawColumns(['Nom full' => 'Nom full','action' => 'action']) 
        ->toJson();



    }



           public function destroy($id)
    {
      $share = Caution::find($id);
        $share->delete();
      return redirect('/Caution');
     
    }


           public function Archive($id)
    {
      $ar = Caution::find($id);
       $ar->archivecaut=1;
       $ar->save();
      return redirect('/Caution');

       }
     














}
