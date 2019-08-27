<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;
use App\Location;
use App\Quittance;
use Carbon\Carbon;
class QuittanceController extends Controller
{

	   public function index()
    {
     
        return view('quittance.index');
      
    }

    public static function dateToFrench($date, $format) 
{
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
}



       public function data()
    {
     
         $quitr =Quittance::all();
          return datatables()->of( $quitr)
    ->addColumn('Nom full', function(Quittance $user) {  
    	 
        return  $user->location->locataire->civilite . ' ' . $user->location->locataire->prenom . ' ' . $user->location->locataire->nom  ; 
        
    })
     ->addColumn('Bien', function(Quittance $user) {  
    	 
        return  $user->location->bien->Ref ; 
        
    })
     ->addColumn('Date', function(Quittance $user) {



		return $this->dateToFrench($user->datequiitance, "F Y");  	 

        
    })
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
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz
								]);
								$qta->save(); };
							}
						}
					} else if(($i == $datedy) && ($i == $dtyear)){
						for ($j = $datedm ; $j <= $dtmonth; $j++){
							
							$qtce = Quittance::whereYear('datequiitance', '=', $i)
							->whereMonth('datequiitance', '=', $j)
							->get();
							if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
							
							
							$qta = new Quittance([
								'location_id' => $loc->id ,
								'datequiitance' => $datetaz
							]);
							$qta->save(); } 
							
						}
					} else if ($i == $datefy) {
						for ($j = 1 ; $j <= $dtmonth; $j++){
							if($j != $datefm){
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz
								]);
								$qta->save(); };
								
							}
						}
					} else {
							if($i != $dtyear){
						for ($j = 1 ; $j <= 12; $j++){

						
							$qtce = Quittance::whereYear('datequiitance', '=', $i)
							->whereMonth('datequiitance', '=', $j)
							->get();
							if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
							
							
							$qta = new Quittance([
								'location_id' => $loc->id ,
								'datequiitance' => $datetaz
							]);
							$qta->save(); }



						}  
					} else {

						for ($j = 1 ; $j <= $dtmonth; $j++){
							
								$qtce = Quittance::whereYear('datequiitance', '=', $i)
								->whereMonth('datequiitance', '=', $j)
								->get();
								if ($qtce->isEmpty()) { 	$datetaz = $i . '-'. $j .'-'.'1';
								
								
								$qta = new Quittance([
									'location_id' => $loc->id ,
									'datequiitance' => $datetaz
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