<?php
echo "readme:<br />";
$readme_filepath = '../README.md';
$readme_contents = 'no readme found<br />.';
if (file_exists('../README.md') {
	$readme_contents = file_get_contents($readme_filepath);
}
echo $readme_contents;
?>
