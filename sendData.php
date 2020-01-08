<?php
include 'index.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumeOsman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (ctype_alpha($ime) && ctype_alpha($prezime)) {
	if (!filter_var($adresa, FILTER_VALIDATE_EMAIL)) {
		$adresaErr = "Invalid email format";
		$conn->close();
}
$sql = "INSERT INTO poruke (ime, prezime, poruka, adresa)
					VALUES ('$ime', '$prezime', '$poruka', '$adresa')";
				
$to      = $adresa;
$subject = 'Resume website';
$message = 'Osman';
$headers = 'From: hfazlic_1@hotmail.com' . "\r\n" .
    'Reply-To: $adresa' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

					
if (($conn->query($sql) === TRUE) && (mail($to, $subject, $message, $headers))) {
	echo "New record created successfully. Check your e-mail";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else {
	echo "Check your writing";
}
$conn->close();
?>