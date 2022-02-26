<?php 

function mysqli_basic_guide($data, $option)
{
    $query = $data['query'];
    $prepare = $data['data'];
    $param = $data['format'];

    $prepareDataTemp = str_replace(',   ', ',', $prepare);
    $prepareDataTemp = str_replace(',  ', ',', $prepareDataTemp);
    $prepareDataTemp = str_replace(', ', ',', $prepareDataTemp);
    $prepareDataTemp = str_replace(',', ',', $prepareDataTemp);
    $prepareDataTemp = explode(',', $prepareDataTemp);

    $prepareData = "";
    $i = 1;
    $n = sizeof($prepareDataTemp);
    foreach($prepareDataTemp as $pdt){
        if ($i != $n) {
            $prepareData = $prepareData . "'" . $pdt . "', ";
        } else if ($i == $n) {
            $prepareData = $prepareData . "'" . $pdt . "'";
        }
        $i++;
    }
    require './guide/mysqliselect.php';
}
