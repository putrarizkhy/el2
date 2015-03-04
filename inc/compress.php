<?php
/* Premium features cutout */


$cssFiles = array_merge($cssFiles,$cssPluginsArray);
$jsFiles = array_merge($jsPluginsArray,$jsFiles);

$totalFiles = 0;
/*CSS COMPRESS*/
$css = '';
foreach($cssFiles as $cssFile){
	$css .= '<link rel="stylesheet" type="text/css" href="'.$cssFile.'" />';
}
/*JAVASCRIPT COMPRESS*/
$js = '';
foreach($jsFiles as $jsFile){
	$js .= '<script type="text/javascript" src="'.$jsFile.'"></script>';
}
?>