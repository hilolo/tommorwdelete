<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;
use App\Location;
use App\Quittance;
class QuittanceController extends Controller
{

	   public function index()
    {
     
        return view('quittance.index');
      
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