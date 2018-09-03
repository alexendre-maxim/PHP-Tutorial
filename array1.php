<?php 

echo "<h3>Multidimensional arrays</h3>";

$materials = array( //associative array

	"Phones" => array(//associative array
		"Samsung" => array ( //indexed array
			"Samsung S",
			"Samsung Note",
			"Samsung G"
		),
		"iPhone" => array ( //indexed array
			"iPhone SE",
			"iPhone 8",
			"iPhone X"
		),
	)

);

echo "<pre>";

print_r($materials);

echo "</pre>";

foreach ($materials as $materialskey => $materialsvalue) {
	echo $materialskey . "<br>";
	foreach ($materialsvalue as $materialskeykey => $materialsvalue) {
		echo $materialskeykey . "<br>";
		foreach ($materialsvalue as $materialskeykeykey) {
			echo "<span style='margin-left:20px> - " . $materialskeykeykey . "</span><br>";
		}
	}
}