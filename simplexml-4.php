<!DOCTYPE html>
<html>
<head>
	<title>PHP SimpleXML Parser</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<table class="table table-hover table-dark w-75 m-auto">
		<thead>
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Author</th>
				<th scope="col">Year</th>
				<th scope="col">Price</th>
			</tr>
		</thead>
		<tbody>
			
				<?php
				$xml = simplexml_load_file("https://www.w3schools.com/php/books.xml") or die("Error: cannot create object");
				foreach($xml->children() as $books){
					echo "<tr><td>" . $books->title . "</td>";
					echo "<td>" . $books->author . "</td>";
					echo "<td>" . $books->year . "</td>";
					echo "<td>" . $books->price . "</td></tr><br>";
				}
				?>
			
		</tbody>
	</table>
 </div>
</body>
</html>