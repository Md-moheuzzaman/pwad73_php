<?php 
$drive = 'd:';

//echo disk_free_space($drive);

$free = disk_free_space($drive);
echo round($free/143742382080/1024, 2);

?>