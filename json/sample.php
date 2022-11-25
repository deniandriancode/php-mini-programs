<?php

$data = array(
		"Peter"=>25,
		"Ben"=>27,
		"Joe"=>33
);

/* echo json_encode($data); */
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$mydata = json_decode($jsonobj);
echo $mydata->Peter;

?>
