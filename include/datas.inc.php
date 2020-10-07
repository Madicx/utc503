<?php
/**
 * Ouvre un fichier JSON et retourne un tableau
 */
function jsonFileToArray(string $filename){
	$str=file_get_contents($filename);
	return json_decode($str,true);
}
/**
 * Affiche le tableau de données $values
 */
function arrayDump(array $values,?string $title=null):void{
	if($title!=null){
		echo "\n$title\n";
		echo "-----------------------\n";
	}
	foreach($values as $element){
		foreach($element as $name=>$value){
				echo "$name : $value\t";
		}
		echo "\n";
	}
}
/**
 * Ouvre un fichier JSON et retourne un tableau
 * Affiche le tableau de données $values
 */
function loadAndDump(string $filename):array{
	$values=jsonFileToArray($filename);
	arrayDump($values,basename($filename));
	return $values;
}

function getEmployeesByService(array $employees,string $service):array{
	return array_filter($employees,function($emp)use($service) {
		return $emp['service']==$service;}
	);
}

/**
 * Retourne un tableau filtré d'élément satisfaisant une condition $key=$value
 * @param array $array
 * @param string $key
 * @param unknown $value
 * @return array
 */

function where(array $array, string $key, $value):array{
    $result=[];
    foreach ($array as $element){
        if($element[$key]===$value){
            $result[]=$element;
        }
    }
    Return $result
}







