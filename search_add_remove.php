<?php

// Indexed Array
$friends = array("Alexendre", "Alex", "John");
echo "<h3>My Friends </h3>";
foreach ($friends as $friend) {
	echo $friend . " is my friend <br>";
}
// Associative Array
$languages = array(
	"en" => "English",
	"fr" => "French",
	"es" => "Spanish"
);
echo "<h3>The Languages </h3>";
foreach ($languages as $languageskey => $languagesvalue) {
	echo $languageskey . " is the key of " . $languagesvalue . "<br>";
}
echo "<h1>Search Methods</h1>";
echo "<h3>Array_Search</h3>";
if(array_search("Alex", $friends)){
	echo "The element exists! (Array_Search)";
}
echo "<h3>In_Array</h3>";
if(in_array("alex", $friends,true)){
	echo "The element exists! (In_Array)";
} else {
	echo "The element <span style='color:red;font-size:20px'>not</span> exists! (In_Array)";
}
echo "<h3>Array_Key_Exists</h3>";
if(array_key_exists("en", $languages)) {
	echo "The element exists! (Array_Key_Exists)";

}
echo "<h1>Add Methods</h1>";
echo "<h3>Unshift Method </h3>";
array_unshift($friends, "Mick");
echo "<h3>My Friends </h3>";
foreach ($friends as $friend) {
	echo $friend . " is my friend <br>";
}
echo "<h3>Push Method </h3>";
array_push($friends, "Arden");
echo "<h3>My Friends </h3>";
foreach ($friends as $friend) {
	echo $friend . " is my friend <br>";
}
echo "<h1>Remove Methods</h1>";
echo "<h3>Shift Method </h3>";
array_shift($friends);
echo "<h3>My Friends </h3>";
foreach ($friends as $friend) {
	echo $friend . " is my friend <br>";
}
echo "<h3>Pop Method </h3>";
array_pop($friends);
echo "<h3>My Friends </h3>";
foreach ($friends as $friend) {
	echo $friend . " is my friend <br>";
}
?>