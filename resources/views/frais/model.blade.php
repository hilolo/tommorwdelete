<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RECU - #  {{strtoupper($ar->locataire->prenom)}}  {{strtoupper($ar->locataire->nom)}}  {{strtoupper($ar->locataire->societe)}} </title>

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
        <tr style="margin-left: ">
            <td align="left" >

                 
                <img style="margin: 10px;" src="https://i.imgur.com/NvyRElv.png" alt="Logo" width="70" class="logo"/>
           
                <pre style="margin: 10px;">

<br />
Date: {{$ldate}} 

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
    <h2 align="center">REÇU DE PAIEMENT </h2>
    <br>
    <table width="100%">
      
   
           <tbody>
        <tr>
            <td style=" text-align:justify; text-justify:auto; ">La société ACCES IMMOTANGER représentée par Monsieur BRAHIM LACHAIBI CIN N° K304670, domicilié à Av Mohamed 6, complexe Alia C , Bloc C n 7 Tanger. Atteste avoir reçu,  de la part de:</td>

        </tr>
        <tr>
            <td>
 Atteste par le présent, avoir reçu, ce jour, de la part de: 
</td>

        </tr>

           <tr>
            <td align="center" > <br><b style=" text-decoration: underline;"> {{strtoupper($ar->locataire->prenom)}}  {{strtoupper($ar->locataire->nom)}} {{strtoupper($ar->locataire->societe)}}   </b> </td>
           
        </tr>
        
         <tr>
            <td style=" text-align:justify; 
                text-justify:auto; "><br> La  somme  de : <b> {{$ar->montant}} MAD </b> {{$loertext}} Dirhams  concernant les frais d’agence relatifs à la location de l’appartement sis à     {{$ar->adresse}} Tanger .</td>

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
            <td style=" text-align:justify; 
                text-justify:auto; " >La société ACCES IMMOTANGER représentée par Monsieur BRAHIM LACHAIBI CIN N° K304670, domicilié à Av Mohamed 6, complexe Alia C , Bloc C n 7 Tanger. Atteste avoir reçu,  de la part de:</td>

        </tr>
        <tr>
            <td>
 Atteste par le présent, avoir reçu, ce jour, de la part de: 
</td>

        </tr>

           <tr>
            <td align="center" > <br><b style=" text-decoration: underline;"> {{strtoupper($ar->locataire->prenom)}}  {{strtoupper($ar->locataire->nom)}} {{strtoupper($ar->locataire->societe)}}    </b> </td>
           
        </tr>
        
         <tr>
            <td><br> La  somme  de : <b> {{$ar->montant}} MAD </b> {{$loertext}} Dirhams  concernant les frais d’agence relatifs à la location de l’appartement sis à     {{$ar->adresse}} Tanger .</td>

        </tr>
         <tr>
            <td>Le présent recu est établi pour pour servivre et valoir ce que de droit .</td>

        </tr>
           <tr>
            <td align="right"> <br> Signature</td>

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
                Date: {{$ldate}} //   {{$ar->id}} 
            </td>
        </tr>

    </table>
</div>
</body>
</html>