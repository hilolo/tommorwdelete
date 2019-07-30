<?php

// Affiche toutes les informations, comme le ferait INFO_ALL


$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('biens');


  $xml->startElement("bien");

  $xml->writeAttribute('REFERENCE','1311');

	
	//TITLE
   $xml->startElement("TITLE");
  $xml->writeRaw('aaa');
  $xml->endElement();
  

  //DESCRIPTION
   $xml->startElement("DESCRIPTION");
  $xml->writeRaw('aaa');
  $xml->endElement();

//AD_TYPE
   $xml->startElement("AD_TYPE");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //TRANSACTION
   $xml->startElement("TRANSACTION");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //CITY
   $xml->startElement("CITY");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //Currency
   $xml->startElement("Currency");
  $xml->writeRaw('MAD');
  $xml->endElement();

  //DISTRICT
   $xml->startElement("DISTRICT");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //PERIODE_LOCATION
   $xml->startElement("PERIODE_LOCATION");

  $xml->endElement();

  //FURNISHED
   $xml->startElement("FURNISHED");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //SURFACE
   $xml->startElement("SURFACE");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //NBRE_PIECES
   $xml->startElement("NBRE_PIECES");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //NBRE_ROOMS
   $xml->startElement("NBRE_ROOMS");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //NBRE_BATHS
   $xml->startElement("NBRE_BATHS");
  $xml->writeRaw('aaa');
  $xml->endElement();

  //NBRE_FLOORS
   $xml->startElement("NBRE_FLOORS");
 
  $xml->endElement();

  //AD_FLOOR
   $xml->startElement("AD_FLOOR");

  $xml->endElement();

  //CONSERVATION
   $xml->startElement("CONSERVATION");
  $xml->writeRaw('aaa');
  $xml->endElement();


  //FULLKITCHEN
   $xml->startElement("FULLKITCHEN");
  $xml->writeRaw('1');
  $xml->endElement();




  //GARAGE
   $xml->startElement("GARAGE");
  $xml->writeRaw('aaa');
  $xml->endElement();




  //TERRACE
   $xml->startElement("TERRACE");
  $xml->writeRaw('aaa');
  $xml->endElement();




  //POOL
   $xml->startElement("POOL");
  $xml->writeRaw('aaa');
  $xml->endElement();




  //SECURITY
   $xml->startElement("SECURITY");
  $xml->writeRaw('aaa');
  $xml->endElement();




  //GARDEN
   $xml->startElement("GARDEN");
  $xml->writeRaw('aaa');
  $xml->endElement();




   //SEAVIEWS
   $xml->startElement("SEAVIEWS");
  $xml->writeRaw('aaa');
  $xml->endElement();




 //MOUNTAINSVIEWS
   $xml->startElement("MOUNTAINSVIEWS");
  $xml->writeRaw('aaa');
  $xml->endElement();




 //STORAGEROOM
   $xml->startElement("STORAGEROOM");
  $xml->writeRaw('aaa');
  $xml->endElement();



 //DOUBLEGLAZING
   $xml->startElement("DOUBLEGLAZING");
  $xml->writeRaw('aaa');
  $xml->endElement();


 //OVEN
   $xml->startElement("OVEN");
  $xml->writeRaw('aaa');
  $xml->endElement();



 //HEATING
   $xml->startElement("HEATING");
  $xml->writeRaw('aaa');
  $xml->endElement();



   //MICROWAVE
   $xml->startElement("MICROWAVE");
  $xml->writeRaw('aaa');
  $xml->endElement();



   //FRIDGE
   $xml->startElement("FRIDGE");
  $xml->writeRaw('aaa');
  $xml->endElement();


   //WASHER
   $xml->startElement("WASHER");
  $xml->writeRaw('aaa');
  $xml->endElement();



   //FIREPLACE
   $xml->startElement("FIREPLACE");
  $xml->writeRaw('aaa');
  $xml->endElement();



   //REINFORCEDDOOR
   $xml->startElement("REINFORCEDDOOR");
  $xml->writeRaw('aaa');
  $xml->endElement();


   //SATELLITE
   $xml->startElement("SATELLITE");
  $xml->writeRaw('aaa');
  $xml->endElement();


   //INTERNET
   $xml->startElement("INTERNET");
  $xml->writeRaw('aaa');
  $xml->endElement();

   //TV
   $xml->startElement("TV");
  $xml->writeRaw('aaa');
  $xml->endElement();


   //LATITUDE
   $xml->startElement("LATITUDE");
  $xml->endElement();


   //LONGITUDE
   $xml->startElement("LONGITUDE");
  $xml->writeRaw('aaa');
  $xml->endElement();




   //PHOTO1
   $xml->startElement("PHOTO1");
  $xml->writeRaw('aaa');
  $xml->endElement();



 //PHOTO2
   $xml->startElement("PHOTO2");
  $xml->writeRaw('aaa');
  $xml->endElement();



  $xml->endElement();


$xml->endElement();

header('Content-type: text/xml');
$xml->flush();


?>