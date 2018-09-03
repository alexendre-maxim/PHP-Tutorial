<?php

// [ 1 ] Indexed Array

echo "<h3>The Indexed Array</h3>";

$Friends = array(

	"Alexendre",

	"Alex",

	"Aldwin",

	"Arden",

	"Mick"

);

$Friends[2] = "John";

$nub = count($Friends);

for ($i = 0; $i < $nub; $i++ ) {
	echo $Friends[$i] . " <br/>";
}

echo "<pre>";

print_r($Friends);

echo "</pre>";

// [ 2 ] Associative Array

$languages = array(

	"en" => "English",

	"fr" => "French",

	"es" => "Spanish",

	"pt" => "Portuguese"

);

$languages["nl"] = "Dutch";

echo "<h3>The Associative Array</h3>";

echo "<pre>";

print_r($languages);

echo "</pre>";

foreach ($languages as $lang => $langname) {
	echo "[" . $lang . "] is the key of " . $langname . "<br/>";
}

?>
