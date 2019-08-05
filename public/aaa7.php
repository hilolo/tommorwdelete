<?php 

/*

$f = new NumberFormatter("fr", NumberFormatter::SPELLOUT);
echo $f->format(98);*/



header('Content-type: text/xml; charset=latin');


$servername = "79.170.40.239";
$username = "cl43-immo-rer";
$password = "ahmed87";
$dbz = "cl43-immo-rer";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbz);


$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





$sql = "SELECT * FROM `location` WHERE  id>300 and `afficherUtili`='oui' ";
$res = mysqli_query($conn,$sql);







$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('biens');


while ($row = mysqli_fetch_assoc($res)) {
  

 



  $xml->startElement("bien");

  $xml->writeAttribute('REFERENCE', $row['ref']);

	
	//TITLE
   $xml->startElement("TITLE");
  $xml->writeRaw( $row['titreFr']);
  $xml->endElement();
  

  //DESCRIPTION
   $xml->startElement("DESCRIPTION");
   $text=preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $row['descFr']);
  $xml->writeRaw( $text);
  $xml->endElement();

//AD_TYPE
   $xml->startElement("AD_TYPE");
   if( $row['locationp'] != 'null'){


     if( $row['locationp'] == 'Appartements'){
    $xml->writeRaw( 'appartement');
    
   } else if( $row['locationp'] == 'Villas'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Riads'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Bureaux'){
    $xml->writeRaw( 'bureau');
    
   }   else  if( $row['locationp'] == 'Terrains'){
    $xml->writeRaw( 'Terrains');
    
   } 

   } 

    else if  ( $row['vacance'] != 'null') {

  if( $row['locationp'] == 'Appartements'){
    $xml->writeRaw( 'appartement');
    
   } else if( $row['locationp'] == 'Villas'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Riads'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Bureaux'){
    $xml->writeRaw( 'bureau');
    
   }   else  if( $row['locationp'] == 'Terrains'){
    $xml->writeRaw( 'Terrains');
    
   } 

   } 




    else if  ( $row['vente'] == 'vacance') {


      if( $row['locationp'] == 'Appartements'){
    $xml->writeRaw( 'appartement');
    
   } else if( $row['locationp'] == 'Villas'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Riads'){
    $xml->writeRaw( 'villa');
    
   } else if( $row['locationp'] == 'Bureaux'){
    $xml->writeRaw( 'bureau');
    
   }   else  if( $row['locationp'] == 'Terrains'){
    $xml->writeRaw( 'Terrains');
    
   } 

   }

  $xml->endElement();

  //TRANSACTION
   $xml->startElement("TRANSACTION");
   if( $row['categorie'] == 'vente') $xml->writeRaw('Vente');
    else if  ( $row['categorie'] == 'location') $xml->writeRaw('Location');
    else if  ( $row['categorie'] == 'vacance') $xml->writeRaw('Location vacances');
  $xml->endElement();

  //CITY
   $xml->startElement("CITY");
  $xml->writeRaw( $row['villeFr']);
  $xml->endElement();

  //Currency
   $xml->startElement("Currency");
  $xml->writeRaw('MAD');
  $xml->endElement();

  //DISTRICT
   $xml->startElement("DISTRICT");
  $xml->writeRaw( $row['zone']);
  $xml->endElement();

  //PRICE
   $xml->startElement("PRICE");
  $xml->writeRaw( preg_replace("/[^0-9]/", "",$row["prix"]));
  $xml->endElement();


  //PERIODE_LOCATION
   $xml->startElement("PERIODE_LOCATION");
  $xml->endElement();

  //FURNISHED
   $xml->startElement("FURNISHED");
    if( $row['meuble'] == 'oui') $xml->writeRaw('yes');
    else if  ( $row['meuble'] == 'non') $xml->writeRaw('non');

  $xml->endElement();

  //SURFACE
   $xml->startElement("SURFACE");
   $arq = $stripped = str_replace(' ', '',$row['superficie']);
if($arq != '--' && '-'){
if(preg_match("/[a-z]/i", $arq)){
   
}else   $xml->writeRaw($arq );
}
    
  $xml->endElement();

  //NBRE_PIECES
   $xml->startElement("NBRE_PIECES");
  if( $row['nbrChambre'] != '--') $xml->writeRaw($row['nbrChambre']);
    else $xml->writeRaw('0');
  $xml->endElement();

  //NBRE_ROOMS
   $xml->startElement("NBRE_ROOMS");
  if( $row['nbrChambre'] != '--') $xml->writeRaw($row['nbrChambre']);
    else $xml->writeRaw('0');
  $xml->endElement();

  //NBRE_BATHS
   $xml->startElement("NBRE_BATHS");
  if( $row['nbrSalonBain'] != '--') $xml->writeRaw($row['nbrSalonBain']);
    else $xml->writeRaw('0');
  $xml->endElement();

  //NBRE_FLOORS
   $xml->startElement("NBRE_FLOORS");
 
  $xml->endElement();

  //AD_FLOOR
   $xml->startElement("AD_FLOOR");

  $xml->endElement();

  //CONSERVATION
   $xml->startElement("CONSERVATION");
  $xml->endElement();


  //FULLKITCHEN
   $xml->startElement("FULLKITCHEN");
   if( $row['cuisine'] == 'oui') $xml->writeRaw('yes');
    else $xml->writeRaw('no');
  $xml->endElement();




  //GARAGE
   $xml->startElement("GARAGE");
  if( $row['garage'] == 'oui') $xml->writeRaw('yes');
    else $xml->writeRaw('no');
  $xml->endElement();




  //TERRACE
   $xml->startElement("TERRACE");
  if( $row['terrasse'] == 'oui') $xml->writeRaw('yes');
    else $xml->writeRaw('no');
  $xml->endElement();




  //POOL
   $xml->startElement("POOL");
   if( $row['picine'] == 'oui') $xml->writeRaw('yes');
    else $xml->writeRaw('no');
  $xml->endElement();




  //SECURITY
   $xml->startElement("SECURITY");
  $xml->endElement();




  //GARDEN
   $xml->startElement("GARDEN");
    if( $row['jardin'] == 'oui') $xml->writeRaw('yes');
    else $xml->writeRaw('no');
  $xml->endElement();




   //SEAVIEWS
   $xml->startElement("SEAVIEWS");
  $xml->endElement();




 //MOUNTAINSVIEWS
   $xml->startElement("MOUNTAINSVIEWS");
  $xml->endElement();




 //STORAGEROOM
   $xml->startElement("STORAGEROOM");
  $xml->endElement();



 //DOUBLEGLAZING
   $xml->startElement("DOUBLEGLAZING");
  $xml->endElement();


 //OVEN
   $xml->startElement("OVEN");
  $xml->endElement();



 //HEATING
   $xml->startElement("HEATING");
  $xml->endElement();



   //MICROWAVE
   $xml->startElement("MICROWAVE");
  $xml->endElement();



   //FRIDGE
   $xml->startElement("FRIDGE");
  $xml->endElement();


   //WASHER
   $xml->startElement("WASHER");
  $xml->endElement();



   //FIREPLACE
   $xml->startElement("FIREPLACE");
  $xml->endElement();



   //REINFORCEDDOOR
   $xml->startElement("REINFORCEDDOOR");
  $xml->endElement();


   //SATELLITE
   $xml->startElement("SATELLITE");
  $xml->endElement();


   //INTERNET
   $xml->startElement("INTERNET");
  $xml->endElement();

   //TV
   $xml->startElement("TV");
  $xml->endElement();


   //LATITUDE
   $xml->startElement("LATITUDE");
  $xml->endElement();


   //LONGITUDE
   $xml->startElement("LONGITUDE");
   $xml->endElement();

$idannonce=$row['id'];

$sql2 = "SELECT * FROM `imagelocation` WHERE `portfolio_id` =$idannonce ";
$res2 = mysqli_query($conn,$sql2);


$ARQ=2;
$stt=0;

while ($row = mysqli_fetch_assoc($res2)) {

   //PHOTO1
if($row["status"] == 1   ){
   $xml->startElement("PHOTO1");
  $xml->writeRaw( 'http://www.accesimmotanger.com/location/upload/' . $row["id"] .'_'.  $row["url"]);
  $xml->endElement();

  	$stt++;


} else  { 

     $xml->startElement("PHOTO" . $ARQ );
  $xml->writeRaw( 'http://www.accesimmotanger.com/location/upload/' . $row["id"] .'_'.  $row["url"]);
  $xml->endElement();
  $ARQ++;

      }

     /* if($sst > 0) {
      	   $xml->startElement("PHOTO1");
  $xml->writeRaw( 'http://www.accesimmotanger.com/location/upload/' . $row["id"] .'_'.  $row["url"]);
  $xml->endElement();

      	}*/



}






  $xml->endElement();

  }


$xml->endElement();


$xml->flush();

$conn->close();


?>