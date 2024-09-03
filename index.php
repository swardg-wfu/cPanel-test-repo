<?php
echo "readme:<br />";
$readme_filepath = './README.md';
$readme_contents = 'no readme found<br />.';
if (file_exists($readme_filepath)) {
	$readme_contents = file_get_contents($readme_filepath);
}
echo $readme_contents;
?>
