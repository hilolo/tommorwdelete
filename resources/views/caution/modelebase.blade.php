<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RECU - # {{$ar->location->id}}    {{strtoupper($ar->location->locataire->prenom)}}  {{strtoupper($ar->location->locataire->nom)}} </title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: medium;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: small;
        }
        .invoice table {
            margin: 15px;
            margin-left: 40px;
            margin-right: 40px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            
            color: black;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        hr {
    border-top:9px dotted #000;
    /*Rest of stuff here*/
}
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">

                 
                <img style="margin: 10px;" src="https://i.imgur.com/NvyRElv.png" alt="Logo" width="70" class="logo"/>
           
                <pre>

<br />
Date: {{$ldate}} 
Status: Payé
@if($ar->duplica > '2')
[ duplicata :{{$ar->duplica}} ]
 @endif
</pre>


            </td>
            <td align="center">
                <img src="http://ekladata.com/yKjXsbc5Z8_Ep13LSqSu57_CSpY.jpg" alt="Logo" width="120" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>ACCESIMMOTANGER</h3>
                <pre>
                    www.accesimmotanger.ma

                    Route de Malabata 
                    Complexe Alia C 
                    RDC n°7 Tangier
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h2 align="center">RECU DE PAIMENT</h2>
    <br>
    <table width="100%">
      
        <tbody>
        <tr>
            <td>Je, soussigné :<b> {{$ar->location->bien->locataire->civilite}}  {{$ar->location->bien->locataire->prenom}}  {{$ar->location->bien->locataire->nom}}  </b> 
       
       
@if(!empty($ar->location->bien->locataire->cin))

 titulaire de la CIN n {{$ar->location->bien->locataire->cin}}
@endif


@if(!empty($ar->location->bien->locataire->adresse))

 demeurant a {{$ar->location->bien->locataire->adresse}}
@endif




                  demeurant a {{$ar->location->bien->locataire->adresse}} représenté par Monsieur Brahim Lachaibi CIN N T405871, domicilité a AV. Mohammed VI, Complexe Alia C,rdc n7. Tanger Atteste Avoi recu, de la part de:</td>

        </tr>
           <tr>
            <td align="center" > <br><b style=" text-decoration: underline;"> {{strtoupper($ar->location->locataire->prenom)}}  {{strtoupper($ar->location->locataire->nom)}}  {{strtoupper($ar->location->locataire->societe)}}    </b> </td>
           
        </tr>
        
         <tr>
            <td><br> La somme de : <b> {{$ar->loyer}} MAD </b> {{$loertext}} Dirhams concernant le loyer du mois de <b> {{$moisy}} </b> pour la location de lappartment sis a :  {{$ar->location->bien->adresse}}  {{$ar->location->bien->ville}}</td>

        </tr>
         <tr>
            <td>Le présent recu est établi pour pour servivre et valoir ce que de droit .</td>

        </tr>
         <tr>
            <td align="right"> <br> Signature</td>

        </tr>
     

        </tbody>

    
    </table>
    <br><br><br><br><br><br>
    <hr>


      <h5 align="center">RECU DE PAIMENT</h5>
    <br>
    <table width="100%" style="font-size: x-small;"> 
      
          <tbody>
        <tr>
            <td>Je, soussigné :<b> {{$ar->location->bien->locataire->civilite}}  {{$ar->location->bien->locataire->prenom}}  {{$ar->location->bien->locataire->nom}}  </b> 
       
       
@if(!empty($ar->location->bien->locataire->cin))

 titulaire de la CIN n {{$ar->location->bien->locataire->cin}}
@endif


@if(!empty($ar->location->bien->locataire->adresse))

 demeurant a {{$ar->location->bien->locataire->adresse}}
@endif



                  demeurant a {{$ar->location->bien->locataire->adresse}} représenté par Monsieur Brahim Lachaibi CIN N T405871, domicilité a AV. Mohammed VI, Complexe Alia C,rdc n7. Tanger Atteste Avoi recu, de la part de:</td>

        </tr>
           <tr>
            <td align="center" > <br><b style=" text-decoration: underline;"> {{strtoupper($ar->location->locataire->prenom)}}  {{strtoupper($ar->location->locataire->nom)}}  {{strtoupper($ar->location->locataire->societe)}}    </b> </td>
           
        </tr>
        
         <tr>
            <td><br> La somme de : <b> {{$ar->loyer}} MAD </b> {{$loertext}} Dirhams concernant le loyer du mois de <b> {{$moisy}} </b> pour la location de lappartment sis a :  {{$ar->location->bien->adresse}}  {{$ar->location->bien->ville}}</td>

        </tr>
         <tr>
            <td>Le présent recu est établi pour pour servivre et valoir ce que de droit .</td>

        </tr>
      
     

        </tbody>

    
    </table>




</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
              
            </td>
            <td align="right" style="width: 50%;">
                Date: {{$ldate}} //   {{$ar->location->id}} 
            </td>
        </tr>

    </table>
</div>
</body>
</html>

