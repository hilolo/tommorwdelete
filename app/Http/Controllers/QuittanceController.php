<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Location;

class QuittanceController extends Controller
{
    

    function all()
    {

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
						$a=0;
						$counti=1;

						$datedy = date("Y", strtotime($loc->date_debutbail));
						$datedm = date("n", strtotime($loc->date_debutbail));
						$datefy = date("Y", strtotime($loc->date_finbail));
						$datefm = date("n", strtotime($loc->date_finbail));

					
					for ($i = $datedy ; $i <= $dtyear; $i++) {

							  				
  							 if ($i == $dtyear  ){
								if($dtyear == $datefy){
  								for ($j = 1 ; $j <= $dtmonth; $j++) 
  								{
  									if($j != $datefm){
  										// if quiitance equal last year 
  									}


  								}
  							} 
  							else {

  								for ($j = 1 ; $j <= $dtmonth; $j++) 
  								{


  								}


  							}
  							  else if($i == $datedy)
  							{
  								//if quiittance exiiste month in this year and month if not create one (old)
  								for ($j = $datedm ; $j <= 12; $j++) 
  								{
  									

  								}
 
  							} 
  							 else
  							 {
  								for ($j = 1 ; $j <= $dtmonth; $j++) 
  								{


  								}


  							}


  							} 


						}
					dd($a);	
						

				}


				}

    }



}
