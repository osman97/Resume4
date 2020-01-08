<!DOCTYPE html>
<!-- 
	Name: Osman Fazlić
	Course name: Web Applications Development
	Professor: Ali Almisreb
	Date: December 15th, 2019
 -->
<html>
	<head>
		<title>Osman Fazlić</title>
		<link href="osman.css" type="text/css" rel="stylesheet">	
	</head>
	<body>
	
		<h1>Osman Fazlić</h1>
		
		<div class="navigation">
			<ul>
				<li><a href="#about me"><h2>About me</h2></a></li>
				<li><a href="#education"><h2>Education</h2></a></li>
				<li><a href="#interests"><h2>Interests</h2></a></li>
				<li><a href="#contact"><h2>Contact</h2></a></li>
				<li><a href="https://osman97.github.io/prvi.html" target="_blank"><h2>HTML</h2></a></li>
				<li><a href="https://osman97.github.io/drugi.html" target="_blank"><h2>CSS</h2></a></li>
				<li><a href="https://osman97.github.io/calculatorOsman.html" target="_blank"><h2>Services</h2></a></li>	
			</ul>
		</div>
		
		<img class='photo' src="Osman_slika.jpg">
		
		
		
		<div class="timetable">
		<p>Timetable</p>
		<table>
			<tr>
				<th>Time</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
			</tr>
			<tr>
				<td>09:00</td>
				<td></td>
				<td>Operating Systems</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10:00</td>
				<td></td>
				<td>Operating Systems</td>
				<td></td>
				<td>Operating Systems</td>
				<td></td>
			</tr>
			<tr>
				<td>11:00</td>
				<td></td>
				<td></td>
				<td>Computer Vision</td>
				<td>Algorithms and Data structures</td>
				<td></td>
			</tr>
			<tr>
				<td>12:00</td>
				<td></td>
				<td></td>
				<td>Web Application Development</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>13:00</td>
				<td>Computer Vision</td>
				<td>Algorithms and Data structures</td>
				<td>Web Application Development</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>14:00</td>
				<td>Computer Vision</td>
				<td>Algorithms and Data structures</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>15:00</td>
				<td>Web Application Development</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>16:00</td>
				<td>Network Programming</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>17:00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		</div>

		<div class="text">
		
		<h2 id="about me"> About me </h2>
			<p>
				I am from a small town near Tuzla called Kalesija. I was born in 1997, 186cm tall and 22 years old. 
			</p>		
		<h2 id="education"> Education </h2> 
			<p> 
				Elementary school in Kalesija<br>
				High school in Tuzla(Behram-begova medresa)<br>
				International University Sarajevo<br>
			</p>
		<h2 id="interests"> Interests </h2> 
			<p> 
				I am interested in football, I watch football games every week, also I play football almost every day.<br>
			    Computer games are also in my field of interests, I love to play it.<br>
				Programming is also one thing that interests me and I like to research about that.
			</p>
		<h2 id="contact"> Contact </h2>
            <p>
				Mobile phone:+387 61 085 394<br>
				E-mail: osmanfazlic1997@gmail.com
            </p>
			
			<?php
					// define variables and set to empty values
					
					$ime = $prezime = $poruka = $adresa = "";
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$ime = test_input($_POST["fname"]);
						$prezime = test_input($_POST["lname"]);
						$poruka = test_input($_POST["message"]);
						$adresa = test_input($_POST["e-mail"]);
					}
					
					function test_input($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
			?>
			
			<form method="post" action="sendData.php">
					
				<label for="fname"><p>First Name</p></label>
				<input type="text" id="fname" name="fname">
						
				<label for="lname"><p>Last Name</p></label>
				<input type="text" id="lname" name="lname">
						
				<label for="message"><p>Message</p></label>
				<textarea id="message" name="message" placeholder="Write me something (100 characters maximum)"></textarea>
				
				<label for="e-mail">E-mail</label>
				<input type="email" id="e-mail" name="e-mail">
						
				<input type="submit">
			</form>
		</div>
			
	</body>
</html>