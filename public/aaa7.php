
<?php
$servername = "79.170.40.239";
$username = "cl43-immo-rer";
$password = "ahmed87";
$dbz = "cl43-immo-rer";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbz);


$sql = "SELECT * FROM location ";
$res = mysqli_query($conn,$sql);



$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('countries');

while ($row = mysqli_fetch_assoc($conn,$res)) {
  $xml->startElement("country");

  $xml->writeAttribute('udid', $row['id']);
  $xml->writeRaw($row['id']);

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/xml');
$xml->flush();




// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close();
?>