<?php
// Indexed Arrays
$students = array(
	"Alexendre",
	"Alex",
	"John",
	"Mick"
);
$results = array(
	80,
	78,
	92,
	66
);
$numb = count($results);
$reversedStudents = array_reverse($students);
$reversedResults = array_reverse($results);
// Associative Array
$materials = array(
	"300$" => "Samsung",
	"900$" => "iPhone",
	"500$" => "Huawei"
);
$reversedMaterials = array_reverse($materials);
// Shuffle
$questions = array(
	"What's your name ?",
	"What's your job ?",
	"How old are you ?",
	"Where are you from ?"
);

?>

<html>
	<head>
		<title>PHP Tutorial Part 02</title>
		<style>
			table:first-of-type{
				margin-left: -5px;
			}
			table{
				width: 15%;
				float: left;
				margin-left: 10px;

				margin-bottom: 20px;
			}
			caption{
				color: red;
				font-size: 20px;
			}
			table tr td{
				padding: 10px 25px;
			}
			h3{
				width: 300px
			}
		</style>
	</head>
	<body>
		<h1>Sort Arrays</h1>
		<h3>Indexed Arrays</h3>
		<table border="1">
			<caption>Normal Indexed Array</caption>
			<thead>
				<td>Name</td>
				<td>Results</td>
			</thead>
			<tbody>
				<?php
					for($i = 0; $i < $numb; $i++){
						echo "<tr>";
						echo "<td>" . $students[$i] . "</td>";
						echo "<td>" . $results[$i] . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		<table border="1">
			<caption>Sort (Indexed Array)</caption>
			<thead>
				<td>Name</td>
				<td>Results</td>
			</thead>
			<tbody>
				<?php
					sort($results);
					for($i = 0; $i < $numb; $i++){
						echo "<tr>";
						echo "<td>" . $students[$i] . "</td>";
						echo "<td>" . $results[$i] . "</td>";
						echo "</tr>";
					}
				?>							
			</tbody>
		</table>
		<table border="1">
			<caption>Reverse Sort</caption>
			<thead>
				<td>Name</td>
				<td>Results</td>
			</thead>
			<tbody>
				<?php
					rsort($results);
					for($i = 0; $i < $numb; $i++){
						echo "<tr>";
						echo "<td>" . $students[$i] . "</td>";
						echo "<td>" . $results[$i] . "</td>";
						echo "</tr>";
					}
				?>				
			</tbody>
		</table>
		<table border="1">
			<caption>Reverse (Indexed Array)</caption>
			<thead>
				<td>Name</td>
				<td>Results</td>
			</thead>
			<tbody>
				<?php
					for($i = 0; $i < $numb; $i++){
						echo "<tr>";
						echo "<td>" . $reversedStudents[$i] . "</td>";
						echo "<td>" . $reversedResults[$i] . "</td>";
						echo "</tr>";
					}
				?>					
			</tbody>
		</table>
		<h3>Associative Arrays</h3>
		<table border="1">
			<caption>Normal Associative Array</caption>
			<thead>
				<td>Model</td>
				<td>Price</td>
			</thead>
			<tbody>
				<?php
					foreach ($materials as $materialKey => $materialvalue) {
						echo "<tr>";
						echo "<td>" . $materialvalue . "</td>";
						echo "<td>" . $materialKey . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		<table border="1">
			<caption>Sort Array (Associative Arrays)</caption>
			<thead>
				<td>Model</td>
				<td>Price</td>
			</thead>
			<tbody>
				<?php
					ksort($materials);
					foreach ($materials as $materialKey => $materialvalue) {
						echo "<tr>";
						echo "<td>" . $materialvalue . "</td>";
						echo "<td>" . $materialKey . "</td>";
						echo "</tr>";
					}
				?>			
			</tbody>
		</table>
		<table border="1">
			<caption>Reverse Sort (Associative Array)</caption>
			<thead>
				<td>Model</td>
				<td>Price</td>
			</thead>
			<tbody>
				<?php
					krsort($materials, SORT_REGULAR);
					foreach ($materials as $materialKey => $materialvalue) {
						echo "<tr>";
						echo "<td>" . $materialvalue . "</td>";
						echo "<td>" . $materialKey . "</td>";
						echo "</tr>";
					}
				?>	
			</tbody>
		</table>
		<table border="1">
			<caption>Reverse (Associative Array)</caption>
			<thead>
				<td>Model</td>
				<td>Price</td>
			</thead>
			<tbody>
				<?php
					foreach ($reversedMaterials as $materialsKey => $materialsvalue) {
						echo "<tr>";
						echo "<td>" . $materialsvalue . "</td>";
						echo "<td>" . $materialsKey . "</td>";
						echo "</tr>";
					}
				?>	
			</tbody>
		</table>
		<h3>Shuffle</h3>
		<?php
			shuffle($questions);
			echo "<h4>" . $questions[1] . "</h4>";
		?>
		<input type="text">
		<button type="submit">Submit</button>
	</body>	
</html>