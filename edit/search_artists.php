<?php
sleep(3);
if (empty($_GET['term']))
    exit;
$q = strtolower($_GET["term"]);
$json = file_get_contents('artist.json');
$array = json_decode($json, true);
$result = array();
foreach ($array as $innerArray) {
    //  Check type
    if (is_array($innerArray)) {
        //  Scan through inner loop
        foreach ($innerArray as $key => $val) {
            if ('artistName' == $key) {
                if (strpos(strtolower($val), $q) !== false) {
                    array_push($result, $val);
                }
                if (count($result) > 3)
                    break;
            }
        }
    }
}
echo json_encode($result);