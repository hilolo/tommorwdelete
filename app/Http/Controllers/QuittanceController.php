<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;
use App\Location;
use App\Quittance;
use Carbon\Carbon;
use PDF;
use NumberFormatter;
class QuittanceController extends Controller
{

	   public function index()
    {
     
        return view('quittance.index');
      
    }


       public function index2()
    {

    	$ldate = date('Y/m/d');

     		$m= date('n',strtotime($ldate));

     		$y=date('Y',strtotime($ldate));


     
        return view('quittance.index2',compact('m','y'));
      
    }


        public function search(Request $request)
    {
     		$date= $request->dato;


			$m= date('n',strtotime($date));

     		$y=date('Y',strtotime($date));

           return view('quittance.index2',compact('m','y'));
      
    }





       public function valide($id)
    {
     
        	 $ar= Quittance::find($id);
        	 $ldate = date('Y-m-d H:i:s');

        	 $ar->Etat='Payé';
        	 $ar->descrption .=' Validé le :' .  $ldate;
        	 $ar->save();


        	 return redirect('/quittance/recu/' . $id );


      
    }


      public function delete($id)
    {
     
        	 $ar= Quittance::find($id);
        	  $ar->delete();

        	 return redirect('/quittance');   
    }




       public function recu($id)
    {




     
    	 $ar= Quittance::find($id);

    	 $q= ++$ar->duplica;
    	   $ar->duplica=$q ;
    	  

        	  $ar->save();


    	$f = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
			$loertext=$f->format($ar->loyer);




			$moisy =  $this->dateToFrench($ar->datequiitance, "F Y");  

$ldate = date('Y-m-d H:i:s');


$pdf = PDF::loadView('quittance.model',compact('ar','loertext','moisy','ldate'));
return $pdf->stream($ar->id .'.pdf');
 	


      
    }
    
    

    public static function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}



       public function data($st)
    {
			     	if($st == 1)	
         $quitr =Quittance::orderBy('datequiitance','DESC')->get();
     else if($st == 2) $quitr =Quittance::latest('id')->where('Etat','Payé')->get();
          return datatables()->of($quitr)
    ->addColumn('Nom full', function(Quittance $user) {  
    	 
        return '<a   href="/Locataire/'.   $user->location->locataire->id.'/View"    >' .   $user->location->locataire->prenom . ' ' . $user->location->locataire->nom . ' ' . $user->location->locataire->societe .   '</a>'  ; 
        
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

        ->rawColumns(['descrption' => 'descrption','Etat' => 'Etat','action' => 'action','Nom full' => 'Nom full'])
       
    ->toJson();

        
      
    }

 public function dataser($month,$year)
    {
			     	
$quitr =Quittance::orderBy('datequiitance','DESC')
->whereYear('datequiitance', '=', $year)
->whereMonth('datequiitance', '=', $month)
->where('Etat', '=', 'En retard')
 ->get();


          return datatables()->of($quitr)
    ->addColumn('Nom full', function(Quittance $user) {  
    	 
        return   $user->location->locataire->prenom . ' ' . $user->location->locataire->nom . ' ' . $user->location->locataire->societe   ; 
        
    })
     ->addColumn('info', function(Quittance $user) {  
    	 
        return   $user->location->locataire->tel . ' ' .    $user->location->locataire->email  ;   
          ; 
        
    })
     ->addColumn('Bien', function(Quittance $user) {  
    	 
        return  $user->location->bien->Ref  . ' ' .  $user->location->bien->adresse  ;  
        
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





	
	function all()
	{
		$co=0;
		$dt = new DateTime();
		$dtyear=$dt->format("Y");
		$dtmonth=$dt->format("n");	
		$Locations = Location::where('archiveloc','0')->get();
		foreach ($Locations as $loc) 
		{
			if(date_format($dt,"Y-m-d") >= $loc->date_finbail)
			{
				$ar= Location::find($loc->id);
				$ar->archiveloc=1;
				$ar->save();
			}
			else  
			{ 
				
				$datedy = date("Y", strtotime($loc->date_debutbail));
				$datedm = date("n", strtotime($loc->date_debutbail));
				$datefy = date("Y", strtotime($loc->date_finbail));
				$datefm = date("n", strtotime($loc->date_finbail));
				
				for ($i = $datedy ; $i <= $dtyear; $i++) {
					
					
					
					if (($i == $datedy  ) && ($i == $datefy)){
						for ($j = $datedm ; $j <= $dtmonth; $j++){
							
							if($j != $datefm){
								
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->where('location_id', $loc->id )
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;


								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'


								]);
								$qta->save(); };
							}
						}
					} else if(($i == $datedy) && ($i == $dtyear)){
						for ($j = $datedm ; $j <= $dtmonth; $j++){
							
							$qtce = Quittance::whereYear('datequiitance', '=', $i)
							->whereMonth('datequiitance', '=', $j)
							->where('location_id', $loc->id )
							->get();
							if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
							
							
						
							$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;


								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'


								]);
								$qta->save(); };
							
						}
					} else if ($i == $datefy) {
						for ($j = 1 ; $j <= $dtmonth; $j++){
							if($j != $datefm){
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->where('location_id', $loc->id )
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
							
								$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;


								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'


								]);
								$qta->save(); };
								
							}
						}
					} else if ($i == $datedy) {
						for ($j = $datedm ; $j <= 12; $j++){
						
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->where('location_id', $loc->id )
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
							
						$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;


								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'


								]);
								$qta->save(); };
								
													}
					} else {
							if($i != $dtyear){
						for ($j = 1 ; $j <= 12; $j++){

						
							$qtce = Quittance::whereYear('datequiitance', '=', $i)
							->whereMonth('datequiitance', '=', $j)
							->where('location_id', $loc->id )
							->get();
							if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
							
										$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;


								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'



								]);
								$qta->save(); };



						}  
					} else {

						for ($j = 1 ; $j <= $dtmonth; $j++){
							
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->where('location_id', $loc->id )
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
								
										$qqa=$j + 1;
								$qqb=$i+1;

								if($j != 12){
							
								$dda= $j  .'/'. $i . ' => ' . $qqa . '/' .$i;
							} else $dda= $j  .'/'. $i . ' =>  1/' .$qqb;

								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz,
									'loyer' => $loc->loyer,
									'descrption' => $dda,
									'Etat' => 'En retard',
									'duplica'=> '0'


								]);
								$qta->save(); };
								
							
						}




					}
					}
				}
			}
		} 
		
	}
	
	
	
	
	
}