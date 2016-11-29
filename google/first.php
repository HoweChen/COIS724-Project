<?php

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each

$myfile = fopen("a.plt", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("a.plt")) + "\n";

if($myfile){
    while (($line = fgets($myfile)) !== false) {
        // process the line read.
        $arr = explode("\t",$line);
        echo'<maker ';
        echo 'lat="'. floatval($arr[0]) . '" ';
        echo 'lng="'. floatval($arr[1]). '" ';
        //echo 'address="'. floatval($arr[2]).'"';
        //echo 'name="'. floatval($arr[3]).'"';
        //echo 'type="' . $row['type'] . '" ';
        echo '/>';
    }

    fclose($myfile);

} else {
    // error opening the file.
}

// End XML file
echo '</markers>';
?>