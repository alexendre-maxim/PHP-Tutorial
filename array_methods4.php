<?php

// Array_Sum Method
$languages = array(
	"HTML",
	"CSS",
	"JS",
	"PHP",
	"JQUERY"
);
$results = array(
	90,
	95,
	88,
	85,
	92
);
$numb = count($results);
// Array_Rand Method

$clubA = array(
	"club1",
	"club2",
	"club3",
	"club4"
);
$clubB = array(
	"club5",
	"club6",
	"club7",
	"club8"
);

$groupA = array_rand($clubA, 3);
$groupB = array_rand($clubB, 3);
// Array_Column Mehtod
$teachers = array(
	array(
		"Name" => "Alexendre",
		"Specialization" => "Medecin"
	),
	array(
		"Name" => "Arden",
		"Specialization" => "Engennering"
	),
	array(
		"Name" => "Mick",
		"Specialization" => "Mathematics"
	)
);
$teachersC = array_column($teachers, "Name", "Specialization");
// Array_Unique
$participants = array(
	"Alexendre",
	"Alex",
	"Alexendre",
	"Arden",
	"Alex",
	"Mick",
	"John",
	"John",
	"Mick",
	"Alexendre",
	"Alex",
	"John",
	"Arden"
);
$participantsUnique = array_unique($participants);
?>

<html>
	<head>
		<title>Array Methods Part 03</title>
		<style>
			table{
				margin-bottom: 20px;
			}
			table tr td{
				padding: 10px 20px;
			}
		</style>
	</head>
	<body>
		<h3>Array_Sum</h3>
		<table border="1">
			<thead>
				<tr>
					<th>Language</th>
					<th>Result</th>
				</tr>	
			</thead>	
			<tbody>
				<?php
					for($i = 0; $i < $numb; $i++) {
						echo "<tr>";
						echo "<td>" . $languages[$i] . "</td>";
						echo "<td>" . $results[$i] . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		<?php
			echo "The Sum is " . array_sum($results) . "<br>";
			echo "The Average is : " . array_sum($results) / $numb . "%";
		?>
		<h3>Array_Rand</h3>
		<table>
			<tr>
				<th>Group A</th>
				<th>Group B</th>
			</tr>	
			<tr>
				<td>
					<?php
						foreach ($groupA as $groupa) {
							echo "<li>" . $clubA[$groupa] . "</li>";
						}
					?>
				</td>
				<td>
					<?php
					foreach ($groupB as $groupb) {
							echo "<li>" . $clubB[$groupb] . "</li>";
						}
					?>	
				</td>
			</tr>	
		</table>
		<h3>Array_Column</h3>
		<?php
			echo "<pre>";
			print_r($teachers);
			echo "</pre>";
			echo "<pre>";
			print_r($teachersC);
			echo "</pre>";
		?>
		<h3>Array_Unique</h3>
		<h5>Normal Array </h5>
		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>		
				<?php 
					foreach($participants as $participant){
						echo "<tr>";
						echo "<td>" . $participant . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>	
		<h5>Unique Array</h5>
		<table border="1">
			<thead>
				<tr>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>		
				<?php 
					foreach($participantsUnique as $participantt){
						echo "<tr>";
						echo "<td>" . $participantt . "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</body>	
</html>