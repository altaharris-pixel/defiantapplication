
<?php
$homepage = file_get_contents('./loremipsum.txt', true);
preg_match_all('/\[(.*?)\]/', $homepage, $matches);
echo "<div style='padding-bottom:2em;'>Alta Harris square bracket matches in loremipsum.</div>";

if(count($matches)>0){
	for($i = 0; $i < count($matches[1]); ++$i) {
		
		echo "<div>--" . $matches[1][$i] . "</div>";
	}
}
?>
