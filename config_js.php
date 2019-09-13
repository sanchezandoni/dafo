<?php

$config = parse_ini_file("config.ini", true, INI_SCANNER_RAW);//INI_SCANNER_TYPED //INI_SCANNER_NORMAL //INI_SCANNER_RAW

if( !(
    !!$config
    && is_array($config)
    && array_key_exists("config_js", $config)
    && is_array($config["config_js"])
) ) {
    throw new Exception('El fichero config_js requiere que el fichero de configuración config.ini contenga una sección llamada "config_js".');
}

$config_js = $config["config_js"];

echo "const CONFIG = Object.freeze( {\n";

$i = 0;
$array_size = sizeof($config_js);
foreach($config_js as $conf_key=>$conf_value){
	$i++;
	echo "\t".$conf_key.": ";

	if( is_numeric($conf_value) ) echo $conf_value;
	else if ( in_array($conf_value, ["true","false","TRUE","FALSE"] ) ) echo $conf_value;
	else echo "'".$conf_value."'";

	if($i < $array_size) echo ",";
	echo "\n";
}

echo "} );";