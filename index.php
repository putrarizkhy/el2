<?php
session_start();
/* METRO UI TEMPLATE v4.b3.1 LITE
/*
/* Copyright 2014 Thomas Verelst, http://metro-webdesign.info
/* Do not redistribute or sell this template, nor claim this is your own work. */



/* Get language */
 // Load default locale

	

/* Include config files */$siteTitle = 'E-Library 2.0'; /* will be displayed above the url-bar / in tab / on Google */
$siteName = 'E-Library'; /* The biggest title on your homepage */
$siteDesc ='version 2.0'; /* subtitle on your homepage */
$siteTitleHome = 'Home'; // will be displayed above the url-ba / in tab / in google when the home-page is open
$siteFooter = '©HASAMA.Corps';


$lang = "en"; // lang of the site (used for locale file! So if you put "nl" you need a file nl.php in the locale folder. (to create such a file: start by copying the default en.php file)

/* Compressing settings */
$compressJS = false; // compress JS
$compressCSS = false; // compress CSS
$autoFlush = true;
$autoFlushPlugins = true;

$compressJS_mob = false; // compress JS of mobile site
$compressCSS_mob = false; // compress CSS of mobile site
$autoFlush_mob = true;
$autoFlushPlugins_mob = true;

/* Plugin settings*/
$disabledPluginsDesktop = array(); // add the folder names here if you want to specifically disable plugins on the main (full/desktop) site
$disabledPluginsMobile = array(); // add the folder names here if you want to specifically disable plugins on the mobile site

/* LAYOUT CONFIG */



$font = ""; // leave blank if you want to use the default one, otherwise  ex:  "'Open Sans', Segoe UI light, Tahoma,Helvetica,sans-serif"
$googleFontURL = "http://fonts.googleapis.com/css?family=Open+Sans:400,300,600"; // leave blank if you don't want a special one

$maxPageWidth=900; // max width of page in px

/* Tile options */
$scale = 150; // size of 1 tile of 1x1, in px
$spacing = 10; // space between tiles, in px

/* Tilegroup settings */
$groupTitles = array(''); // titles of the tileGroups
$groupSpacing = array(5); // width of each tileGroup (spacing between the groups in tiles)
$groupDirection = "horizontal"; // put the groups in a vertical or horizontal order?
$mouseScroll = false; //  set to "groups" to scroll between groups, set to "horizontal" to continuously scroll horizontal or set to false to disable scrolling (so it will scroll vertical)

$scrollSpeed = 550; // scrolling speed of tilegroups
$groupInactiveOpacity = 1; // opacity of tiles that are not in the current tilegroup. 1 = full shown, 0.5 = transparent, can have any value between 0 and 1
$groupInactiveClickable = false; // should the tiles in inactive groups be clickable, if false; it'll go to the tilegroup of the clicked tile
$groupShowEffect=0; // the effect which shows the tiles when the page is loaded. 0 = a nice "wave" effect, 1 = fadeIn, 2= increase size  (!only works when $groupInactiveOpacity = 1)

$showSpeed = 400; // speed of the showing transition
$hideSpeed = 300; // hide speed of page transitions

/* Background */
$bgColor = "#0F6D32"; // background color
$bgImage = "img/bg/matdes.jpg"; // background image, leave blank if you dont want one. It is recommend to keep the filesize to a minimum and also, if possible, use a low resolution


$autoRearrangeTiles = true; // auto rearrange tiles when it doesn't fit on the browser?
$autoResizeTiles = true; // auto resize tiles when it doesn't fit on the browser? Can cause markup problems!, will only work if $autoRearrangeTiles is enabled
$autoRearrangeEffect = true; // if true, nice transition effect is used when rearranging tiles. Can be laggy if page is heavy, so disable it then.
$rearrangeTreshhold = 2;  // from which width the tiles should be rearranged? Just play with this value! Should be smaller than the most wide tilegroup.

/*Defaults for tiles*/
$defaultBackgroundColor = "#509601";
$defaultLabelColor = "#476327";
$defaultLabelPosition = "top";

/*
All pages you have in the /pages/ folder must be defined here, it's their own title (shown on top and in the url)
ex: $pageTitles['file.php'] = "This is the title";
ex: $pageURL['file.php'] = "url";
Just copy paste this and fill in :
$pageTitles[''] = "";
*/
/* PAGE OPTIONS */
	
$pageTitles['welcome.php'] = "Welcome to this Site";
$pageTitles['typography.php'] = "Typography of the Metro Template";
$pageTitles['accordions.php'] = "Accordions example page";
$pageTitles['sidebars.php'] = "Sidebars";

/* Page url, this will be visible in the url bar, for example if you fill in "welcome" the url for that page will become yoursite.com/#!/welcome */
$pageURL[''] = "";
$pageURL[''] = "";
$pageURL[''] = "";
$pageURL[''] = "";

/* Optional: page descriptions (for Google)*/
/*$pageDescriptions['welcome.php'] = "This is the welcome page. Welcome.";
*/
/* Optional: page keywords (for Google)(isn't important at all)*/
/*$pageKeywords['welcome.php'] = "welcome, page, test";
*/

/*require_once('inc/detectdevice.php');*/

/* TILE INITS */
$tileTypes = array();
$tile = array();

function chars($r){
	$charSearch = array("/à|á|â|ã|ä|å|æ|À|Á|Â|Ã|Ä|Å|Æ|ą|Ą/","/ç|Ç|ć|Ć/","/è|é|ê|ë|È|É|Ê|Ë|ę|Ę/","/ì|í|î|ï|Ì|Í|Î|Ï/","/ò|ó|ô|õ|ö|ð|ø|Ò|Ó|Ô|Õ|Ö|Ð|Ø/","/œ|Œ/","/ù|ú|û|ü|Ù|Ú|Û|Ü/","/ý|ÿ|Ý|Ÿ/","/š|Š|ś|Ś/","/ž|Ž|ż|ź|Ż|Ź/","/Þ/","/ß/","/ƒ|Ƒ/","/ł|Ł/","/ń|Ń/");
	$charReplace = array("a","c","e","i","o","oe","u","y","s","z","b","ss","f","l","n");
	return preg_replace($charSearch, $charReplace, $r);
};


function stripSpaces($s){
	return str_replace(" ","-",$s);
}
function makeLinkHref($l){
	global $pageURL,$pageTitles, $bot, $nojsuser;
	if($l==""){
		return "";
	}
	if(substr($l,0,9) == 'external:' || substr($l,0,9) == 'gotolink:'){
		return substr($l,9);
	}
	
	if(substr($l,0,7) == "http://" ||
	   substr($l,0,8) == "https://" ||
	   substr($l,0,1) == "/" ||
	   substr($l,0,1) == "#" ||
	   $l[strlen($l)-1] == "/")
	{
		return $l;
	}
	if(array_key_exists($l,$pageURL)){
		$lu = strtolower(chars($pageURL[$l]));
	}else{
		$lu = strtolower(chars("url=".$l));
	}
	
	if($bot && !$nojsuser){
		return "#!/".stripSpaces($lu);	
	}else{
		return "?p=".stripSpaces($lu);
	}
}
function makeLink($l){ // make valid links
	global $pageTitles, $bot, $nojsuser;
	$t = " ";
	if($l==""){
		return "";
	}
	if(substr($l,0,7) == 'newtab:'){
		$t = " target='_blank' ";
		$l = substr($l,7);
	}
	$l = makeLinkHref($l);
	
	if($bot && !$nojsuser){
		return $t."href='".stripSpaces($l)."'";	
	}else{
		return $t."href='".stripSpaces($l)."'";
	}
}
function passToJS(){
	global $passToJS;
	foreach($passToJS as $phpName=>$jsName){
		global ${$phpName};
		echo $jsName." = '".addslashes(${$phpName})."';";
	}
}

$scaleSpacing = $scale+$spacing;

/* TILES */
$tileTypes['custom'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>2,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"content"=>"some content, can contain HTML",
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_custom($group,$x,$y,$width,$height,$background,$url,$content,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
  
  	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	
	?>
  	<a <?php echo makeLink($url);?> class="tile group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft;?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    <?php echo $content;?>
    <?php
	if($labelText!=""){
		if($labelPosition=='top'){
			echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'><div class='tileLabel top' >".$labelText."</div></div>";
		}else{
			echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
		}
	}
	?>
    </a>
    <?php
}
$tileTypes['simple'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>2,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"title"=>"The title",
	"text"=>"the description text",
	"img"=>"","imgAlt"=>"","imgTitle"=>"",
	"imgSize"=>"50",
	"imgToTop"=>"5",
	"imgToLeft"=>"5",
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_simple($group,$x,$y,$width,$height,$background,$url,$title,$text,$img,$imgAlt,$imgTitle,$imgSize,$imgToTop,$imgToLeft,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
    
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	if($img == ""){
		$hasImg = 0;
	}else{
		$hasImg = 1;
	}
	?>
  	<a <?php echo makeLink($url);?> class="tile group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft;?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    <?php if($img != ""){?>
    <img title='<?php echo $imgTitle?>' alt='<?php echo $imgAlt?>' style='float:left; margin-top:<?php echo $imgToTop?>px;margin-left:<?php echo $imgToLeft?>px;' 
    src='<?php echo $img?>' height="<?php echo $imgSize?>" width="<?php echo $imgSize?>"/>
    <?php } ?>
	<div class='tileTitle' style='margin-left:<?php echo ($imgSize+$imgToLeft)*$hasImg+10;?>px;'><?php echo $title?></div>
	<div class='tileDesc' style='margin-left:<?php echo ($imgSize+$imgToLeft)*$hasImg+12;?>px;'><?php echo $text?></div>
    <?php
    if($labelText!=""){
		if($labelPosition=='top'){
			echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'><div class='tileLabel top' >".$labelText."</div></div>";
		}else{
			echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
		}
	}?> 
    </a>
    <?php
}
 /* Defaults*/
$tileTypes['scrollText'] = array(
"group"=>0,
"x"=>0,
"y"=>0,
'width'=>2,
'height'=>1,
"background"=>$defaultBackgroundColor,
"url"=>"",
"title"=>"Title",
"text"=>array(""),
"scrollSpeed"=>5000,
"img"=>"","imgAlt"=>"","imgTitle"=>"",
"imgSize"=>"50",
"imgToTop"=>"5",
"imgToLeft"=>"5",
"labelText"=>"",
"labelColor"=>$defaultLabelColor,
"labelPosition"=>$defaultLabelPosition,
"classes"=>""
);

function tile_scrollText($group,$x,$y,$width,$height,$background,$url,$title,$text,$scrollSpeed,$img,$imgAlt,$imgTitle,$imgSize,$imgToTop,$imgToLeft,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	
	if($img == ""){
		$hasImg = 0;
	}else{
		$hasImg = 1;
	}
	$id =  str_replace(".","_",$group."_".$x."-".$y);
	?>
  	<a <?php echo makeLink($url);?> id="tileScroll<?php echo $id?>" class="tile tileScroll group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight;?>px;
	background:<?php echo $background;?>;" <?php posVal($marginTop,$marginLeft,$tileWidth);?>> 
    <?php if($img!=""){?>
    <img title='<?php echo $imgTitle?>' alt='<?php echo $imgAlt?>' style='float:left; margin-top:<?php echo $imgToTop?>px;margin-left:<?php echo $imgToLeft?>px;' 
    src='<?php echo $img?>' height="<?php echo $imgSize?>" width="<?php echo $imgSize?>"/><?php } ?>
	<div class='tileTitle' style='margin-left:<?php echo ($imgSize+$imgToLeft)*$hasImg+10?>px;'><?php echo $title?></div>
	<div class='divScroll' style='margin-left:<?php echo ($imgSize+$imgToLeft)*$hasImg+12?>px;'><?php echo $text[0]?></div>
    <script>scrollTile("<?php echo $id?>",<?php echo json_encode($text)?>,<?php echo $scrollSpeed?>,0)</script>
    <?php /* Echo label */
	if($labelText!=""){
		if($labelPosition=='top'){
			echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'><div class='tileLabel top' >".$labelText."</div></div>";
		}else{
			echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
		}
	}
	?>
    </a>
    <?php
}
$tileTypes['img'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>1,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"url"=>"",
	"img"=>"",
	"imgAlt"=>"",
	"imgTitle"=>"",
	"desc"=>"The description text",
	"showDescAlways"=>true,
	"imgWidth"=>1,
	"imgHeight"=>1,
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_img($group,$x,$y,$width,$height,$background,$url,$img,$imgAlt,$imgTitle,$desc,$showDescAlways,$imgWidth,$imgHeight,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$imgWidthPx = floor($imgWidth*$scaleSpacing-$spacing);
	$imgHeightPx = floor($imgHeight*$scaleSpacing-$spacing);
	?>
  	<a <?php echo makeLink($url);?> class="tile tileImg group<?php echo $group?> <?php if(!$showDescAlways && $desc!=""){echo $labelPosition;}?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop;?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;
	background:<?php echo $background;?>;"  <?php posVal($marginTop, $marginLeft,$tileWidth);?>> 
    <img title='<?php echo $imgTitle?>' alt='<?php echo $imgAlt?>' src='<?php echo $img?>' width="<?php echo $imgWidthPx;?>" style='margin-left:-<?php echo $imgWidthPx*0.5;?>px; margin-top: -<?php echo $imgHeightPx*0.5?>px; max-height:<?php echo $imgHeightPx?>px;'/>
    <?php /* echo label */
		if($labelPosition=='top'){
			echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'>";
			if($labelText!=""){
				echo "<div class='tileLabel top' >".$labelText."</div>";
			}
		}else{
			echo "<div class='tileLabelWrapper bottom'>";
			if($labelText!=""){
				echo "<div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div>";
			}
		}
	if($desc!=""){
		echo "<div class='imgDesc' ";
		if(!$showDescAlways){
			echo "style='display:none;'";
		}
		echo ">".$desc."</div>";
	}
	?>
    </div>
    </a>
    <?php
}

$tileTypes['centered'] = array( /* Defaults*/
	"group"=>0,
	"x"=>0,
	"y"=>0,
	'width'=>2,
	'height'=>1,
	"background"=>$defaultBackgroundColor,
	"backgroundHover"=>"",
	"color"=>"#FFF",
	"colorHover"=>"",
	"url"=>"",
	"title"=>"Example",
	"img"=>"","imgAlt"=>"","imgTitle"=>"",
	"imgSize"=>"50",
	"imgToTop"=>"0",
	"imgToLeft"=>"0",
	"labelText"=>"",
	"labelColor"=>$defaultLabelColor,
	"labelPosition"=>$defaultLabelPosition,
	"classes"=>"",
);
function tile_centered($group,$x,$y,$width,$height,$background,$backgroundHover,$color,$colorHover,$url,$title,$img,$imgAlt,$imgTitle,$imgSize,$imgToTop,$imgToLeft,$labelText,$labelColor,$labelPosition,$classes){
	global $scale, $spacing, $scaleSpacing, $groupSpacing;
	$marginTop = $y*$scaleSpacing+getMarginTop($group);
	$marginLeft = $x*$scaleSpacing+getMarginLeft($group);
	$tileWidth = $width*$scaleSpacing-$spacing;
	$tileHeight = $height*$scaleSpacing-$spacing;
	?>
  	<a <?php echo makeLink($url);?> class="tile tileCentered group<?php echo $group?> <?php echo $classes?>" style="
    margin-top:<?php echo $marginTop?>px; margin-left:<?php echo $marginLeft?>px;
	width:<?php echo $tileWidth?>px; height:<?php echo $tileHeight?>px;background:<?php echo $background;?>;"
	<?php posVal($marginTop,$marginLeft,$tileWidth);?>	> 
    <div class="container" style="background:<?php echo $background;?>;"
    <?php if($backgroundHover != ""){
		?>
		onMouseOver="javascript:$(this).css('background','<?php echo $backgroundHover?>')"
		onMouseOut="javascript:$(this).css('background','<?php echo $background;?>')"
		<?php
	}?>
	>
    <h3 style='color:<?php echo $color?>'

    <?php if($colorHover != ""){
		?>
		onMouseOver="javascript:$(this).css('color','<?php echo $colorHover?>')"
		onMouseOut="javascript:$(this).css('color','<?php echo $color?>')"
		<?php
	}?>
    >
     <?php if($img != ""){?>
    <img title='<?php echo $imgTitle?>' alt='<?php echo $imgAlt?>' style='margin-top:<?php echo $imgToTop?>px;margin-left:<?php echo $imgToLeft?>px;' 
    src='<?php echo $img?>' height="<?php echo $imgSize?>" width="<?php echo $imgSize?>"/>
    <?php } ?>

    <?php echo $title;?>
    </h3>
    
    </div>

    <?php 
	if($labelText!=""){
		if($labelPosition=='top'){
			echo "<div class='tileLabelWrapper top' style='border-top-color:".$labelColor.";'><div class='tileLabel top' >".$labelText."</div></div>";
		}else{
			echo "<div class='tileLabelWrapper bottom'><div class='tileLabel bottom' style='border-bottom-color:".$labelColor.";'>".$labelText."</div></div>";
		}
	}
	?>
	
    </a>
    <?php
}






/* FILES*/
$cssFiles = array( /* Add your css files to this array */
	'css/layout.css',
	'css/nav.css',
	'css/tiles.css',
	/*'themes/'.$theme.'/theme.css',*/	
);
$jsFiles = array( /* Add your js files to this array */
	'js/functions.js',
	'js/main.js',	
);

/* PLUGIN SYSTEM */
$plugins = array();
function onEvent($event, $function){
	global $plugins;
	$plugins[$event][] = $function;
}
function triggerEvent($event){
	global $plugins;
	if(isset($plugins[$event])){
		foreach($plugins[$event] as $plugin){
			call_user_func($plugin);
		}
	}
}

$jsPluginsArray = array();
$cssPluginsArray = array();
foreach(glob("plugins/" . "*") as $folder){
	if(is_dir($folder) && !in_array($folder, $disabledPluginsDesktop)){
		if(file_exists($folder."/plugin.js")){
			$jsPluginsArray[] = $folder."/plugin.js";		
		}
		if(file_exists($folder."/plugin.css")){
			$cssPluginsArray[] = $folder."/plugin.css";		
		}
		if(file_exists($folder."/desktop.js")){
			$jsPluginsArray[] = $folder."/desktop.js";		
		}
		if(file_exists($folder."/desktop.css")){
			$cssPluginsArray[] = $folder."/desktop.css";		
		}
		if(file_exists($folder."/plugin.php")){
			include($folder."/plugin.php");
		}
	}
}
/*IE fix*/
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) header('X-UA-Compatible: IE=edge');

triggerEvent("beforeDoctype");
?>
<!DOCTYPE html>
<?php
triggerEvent("afterDoctype");


if(file_exists('themes/theme_default/theme.js')){
	$jsFiles[] = 'themes/theme_default/theme.js';
}
if(file_exists('themes/theme_default/theme.php')){
	require_once('themes/theme_default/theme.php');
}

triggerEvent("fileInclude");


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
<!-- Metro UI template : http://metro-webdesign.info V4.3b1 LITE -->
<html lang="<?php echo $lang;?>">
<head>
	<?php triggerEvent("headStart");?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Description" content="<?php echo $siteMetaDesc;?>"/>
    <meta name="keywords" content="<?php echo $siteMetaKeywords;?>"/>
    <link rel="icon" type="image/ico" href="<?php echo $favicon_url;?>"/>
    <meta name="viewport" content="width=1024,initial-scale=1.00, minimum-scale=1.00"/>
    <title><?php echo $siteTitle;?></title> 
    <?php
    if($nojsuser){
    	?>
    	<meta name="robots" content="noindex,nofollow"/>
    }else{
    	?>
		<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW"/>
    	<?php
    }
    ?>
    
    <?php
	
    /*FONT*/
    if($googleFontURL != ""){?>
    	<link href='<?php echo $googleFontURL?>' rel='stylesheet' type='text/css'>
		<?php
	}

	/*CSS*/
	echo $css;
	include_once("inc/css.php");
	
	/*GA*/
	if($googleAnalyticsCode != ""){
		?><script type='text/javascript'>var _gaq = _gaq || [];_gaq.push(['_setAccount', '<?php echo $googleAnalyticsCode?>']);_gaq.push(['_trackPageview']);(function(){var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script><?php
	}
	?> 
	<!--[if IE]>
    <script src="js/html5.js"></script>
     <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]><!-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/html5.js"></script>
	<![endif]-->
    <!--[if !IE]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<![endif]-->

    <script type="text/javascript">window.jQuery || document.write('<\/script><script type="text/javascript" src="js/jquery1102.js"><\/script>')</script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<?php
	/*JS */
	include("inc/phptojs.php");
	if(!$bot){
		echo $js;
	}

    triggerEvent("headEnd");
	?>
    <noscript><style>#tileContainer{display:block}</style></noscript>
</head>
<body class="full <?php echo $device?>">

<?php
triggerEvent("bodyBegin");

/*BG image*/
if($bgImage!=""){
	echo "<img src='".$bgImage."' alt='background-image' id='bgImage'/>";
}
?>
<header>
	<div id="headerWrapper">
		<div id="headerCenter">
			<a id="headerlogo">
				
					<img src="img/icons/Logo-program EL-DP-07.png" style="width: 65px; margin: 0 0 0 -240px;">
				
			</a>
			<div id="headerTitles">
				<h1><a href="<?php if($bot){echo "index.php";}?>#!"><?php echo $siteName?></a></h1>
		   		<h2><?php echo $siteDesc;?></h2>
		    </div>
		    <nav>
            	
		  		 <a href="#!">
				<img src="img/icons/home-01.png" id="homebutton" alt="home"/>
					Home
				</a>

			</nav>
		</div>
    </div>
    <?php triggerEvent("headerEnd");?>
</header>
<div id="wrapper">
	<div id="centerWrapper">

    	<div id="tileContainer" class="" style="width: 1097.5px; height: 579px; display: block;">
                    		
       	<a href="#&amp;" id="groupTitle0" class="groupTitle" style="margin-left: 0px; margin-top: 0px; display: block;" onclick="javascript:$group.goTo(0);"><h3></h3></a>
      	<a id="tileSlideshow0-0_35--0_25" class="tile tileSlideshow group0 noClick" style="margin-top: 5px; margin-left: 56px; width: 190px; height: 190px; display: block; background: rgb(103, 59, 183);" data-pos="5-56-190" data-n="0"> 
    
    <div class="imgWrapperBack" style="width: 192px; height: 192px; left: 165.901654111111px; top: 0px;"><img src="" alt=""></div>
	<div class="imgWrapper" style="width: 192px; height: 192px; left: -26.0983458888889px; top: 0px;"><img src="" alt=""></div>
   
       
    <script>slideshowTiles["tileSlideshow0-0_35--0_25"] = [[],[],[],"slide-right",5000]</script>
    
    <img id="sl_arrowRight" src="img/arrows/simpleArrowRight.png" alt="Slideshow - right"><img id="sl_arrowLeft" src="img/arrows/simpleArrowLeft.png" alt="Slideshow - left"><div class="tileLabelWrapper bottom"><div class="tileLabel bottom" style="border-bottom-color:#11528f;">Live Report</div></div> 
    </a>
      	<a href="#!/url=welcome.php" class="tile tileCentered group0 " style="margin-top: 5px; margin-left: 264px; width: 390px; height: 86px; display: block; background: rgb(255, 214, 0);" data-pos="5-264-390"> 
    <div class="container" style="background:#FFD600;" onmouseover="javascript:$(this).css('background','#FFF')" onmouseout="javascript:$(this).css('background','#FFD600')">
    <h3 style="color:#FFF" onmouseover="javascript:$(this).css('color','#509601')" onmouseout="javascript:$(this).css('color','#FFF')">
         <img title="" alt="" style="margin-top:0px;margin-left:0px;" src="img/icons/box_info.png" height="48" width="48">
    
    Transaksi    </h3>
    
    </div>

    	
    </a>
      	<a href="#!/url=welcome.php" class="tile tileCentered group0 " style="margin-top: 109px; margin-left: 264px; width: 390px; height: 86px; display: block; background: rgb(255, 214, 0);" data-pos="109-264-390"> 
    <div class="container" style="background:#FFD600;" onmouseover="javascript:$(this).css('background','#FFF')" onmouseout="javascript:$(this).css('background','#FFD600')">
    <h3 style="color:#FFF" onmouseover="javascript:$(this).css('color','#509601')" onmouseout="javascript:$(this).css('color','#FFF')">
         <img title="" alt="" style="margin-top:0px;margin-left:0px;" src="img/icons/box_info.png" height="48" width="48">
    
    Keuangan    </h3>
    
    </div>

    	
    </a>
      	<a id="tileSlideshow0-4_25--0_25" class="tile tileSlideshow group0 noClick" style="margin-top: 5px; margin-left: 680px; width: 190px; height: 190px; display: block; background: rgb(103, 59, 183);" data-pos="5-680-190" data-n="0"> 
    
    <div class="imgWrapperBack" style="width: 192px; height: 192px; left: 163.415616px; top: 0px;"><img src="" alt=""></div>
	<div class="imgWrapper" style="width: 192px; height: 192px; left: -28.584384px; top: 0px;"><img src="" alt=""></div>
   
       
    <script>slideshowTiles["tileSlideshow0-4_25--0_25"] = [[],[],[],"slide-right",5000]</script>
    
    <img id="sl_arrowRight" src="img/arrows/simpleArrowRight.png" alt="Slideshow - right"><img id="sl_arrowLeft" src="img/arrows/simpleArrowLeft.png" alt="Slideshow - left"><div class="tileLabelWrapper bottom"><div class="tileLabel bottom" style="border-bottom-color:#11528f;">Anouncement</div></div> 
    </a>
      	<a href="#!/url=books.php" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 0px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-0-190" data-doslide="1"> 
    
    
    <div class="slideText" style="
            height:76px; width:100%;top:190px;    ">
    <h3>Book</h3>    </div>
    <div class="imageWrapper">
    	<div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
			<img src="img/Book-01.png" alt="" title="" style="width:104.5px;"> 
        </div>
		<div class="tileLabelWrapper top" style="border-top-color:#00BFFF;"><div class="tileLabel top">Book</div></div></div> 
   
    </a>
      	<a href="#!/url=ebooks.php" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 240px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-240-190" data-doslide="1"> 
    
    
    <div class="slideText" style="
            height:76px; width:100%;top:190px;    ">
    <h3>E-Book</h3>    </div>
    <div class="imageWrapper">
    	<div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
			<img src="img/ebook-02.png" alt="" title="" style="width:104.5px;"> 
        </div>
		<div class="tileLabelWrapper top" style="border-top-color:#00BFFF;"><div class="tileLabel top">E-Book</div></div></div> 
   
    </a>
      	<a href="#!/url=videos.php" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 480px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-480-190" data-doslide="1"> 
    
    
    <div class="slideText" style="
            height:76px; width:100%;top:190px;    ">
    <h3>Video</h3>    </div>
    <div class="imageWrapper">
    	<div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
			<img src="img/video-03.png" alt="" title="" style="width:104.5px;"> 
        </div>
		<div class="tileLabelWrapper top" style="border-top-color:#00BFFF;"><div class="tileLabel top">Video</div></div></div> 
   
    </a>
      	<a href="#!/url=audios.php" class="tile tileSlide up group0 " style="margin-top: 203.4px; margin-left: 720px; width: 190px; height: 190px; padding: 0px; display: block; background: rgb(0, 187, 212);" data-pos="203_4-720-190" data-doslide="1"> 
    
    
    <div class="slideText" style="
            height:76px; width:100%;top:190px;    ">
    <h3>Audio</h3>    </div>
    <div class="imageWrapper">
    	<div class="imageCenterer" style="width:190px; height:190px;line-height:188px;">
			<img src="img/audio-04.png" alt="" title="" style="width:104.5px;"> 
        </div>
		<div class="tileLabelWrapper top" style="border-top-color:#00BFFF;"><div class="tileLabel top">Audio</div></div></div> 
   
    </a>
      	<a href="#!/url=catbooks.php" id="tileScroll0_0-2_25" class="tile tileScroll group0 " style="margin-top: 405px; margin-left: 0px; width: 310px; height: 70px; display: block; background: rgb(205, 220, 57);" data-pos="405-0-310"> 
    	<div class="tileTitle" style="margin-left:10px;">Kategori</div>
	<div class="divScroll" style="margin-left: 12px; opacity: 1; margin-top: 0px;"></div>
    <script>scrollTile("0_0-2_25",[],2500,0)</script>
        </a>
      	<a href="#!/url=members.php" id="tileSlideshow0-2_25-2_25" class="tile tileSlideshow group0 " style="margin-top: 405px; margin-left: 360px; width: 70px; height: 70px; display: block; background: rgb(0, 187, 212);" data-pos="405-360-70" data-n="0"> 
    
    <div class="imgWrapperBack" style="width: 72px; height: 72px; left: 60.662592px; top: 0px;"><img src="" alt=""></div>
	<div class="imgWrapper" style="width: 72px; height: 72px; left: -11.337408px; top: 0px;"><img src="" alt=""></div>
   
       
    <script>slideshowTiles["tileSlideshow0-2_25-2_25"] = [[],[],[],"slide-right",5000]</script>
    
    <img id="sl_arrowRight" src="img/arrows/simpleArrowRight.png" alt="Slideshow - right"><img id="sl_arrowLeft" src="img/arrows/simpleArrowLeft.png" alt="Slideshow - left"><div class="tileLabelWrapper bottom"><div class="tileLabel bottom" style="border-bottom-color:#11528f;">Member</div></div> 
    </a>
      	<a href="#!/url=photos.php" id="tileSlideshow0-3-2_25" class="tile tileSlideshow group0 " style="margin-top: 405px; margin-left: 480px; width: 70px; height: 70px; display: block; background: rgb(0, 187, 212);" data-pos="405-480-70" data-n="0"> 
    
    <div class="imgWrapperBack" style="width: 72px; height: 72px; left: 59.4682083333333px; top: 0px;"><img src="" alt=""></div>
	<div class="imgWrapper" style="width: 72px; height: 72px; left: -12.5317916666667px; top: 0px;"><img src="" alt=""></div>
   
       
    <script>slideshowTiles["tileSlideshow0-3-2_25"] = [[],[],[],"slide-right",5000]</script>
    
    <img id="sl_arrowRight" src="img/arrows/simpleArrowRight.png" alt="Slideshow - right"><img id="sl_arrowLeft" src="img/arrows/simpleArrowLeft.png" alt="Slideshow - left"><div class="tileLabelWrapper bottom"><div class="tileLabel bottom" style="border-bottom-color:#11528f;">Foto</div></div> 
    </a>
      	<a href="#!/url=cds.php" id="tileScroll0_3_75-2_25" class="tile tileScroll group0 " style="margin-top: 405px; margin-left: 600px; width: 310px; height: 70px; display: block; background: rgb(205, 220, 57);" data-pos="405-600-310"> 
    	<div class="tileTitle" style="margin-left:10px;">Pustaka Multimedia</div>
	<div class="divScroll" style="margin-left: 12px; opacity: 1; margin-top: 0px;"></div>
    <script>scrollTile("0_3_75-2_25",[],2500,0)</script>
        </a>
      	<a href="#!/url=ddcs.php" class="tile group0 " style="margin-top: 485px; margin-left: 80px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-80-94"> 
    <div style="line-height:30px; font-weight:300; margin-top:10px; margin-left:10px;">
<div style="font-size:27px;line-height:30px;">Kode DDC</div>
</div>        </a>
      	<a href="#!/url=locations.php" class="tile group0 " style="margin-top: 485px; margin-left: 240px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-240-94"> 
    <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;">
<div style="font-size:20px;line-height:15px;">Location</div>
</div>        </a>
      	<a href="#!/url=typography.php" class="tile group0 " style="margin-top: 485px; margin-left: 400px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-400-94"> 
    <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;">
<div style="font-size:20px;line-height:15px;">Laporan</div>
</div>        </a>
      	<a href="#!/url=comments.php" class="tile group0 " style="margin-top: 485px; margin-left: 560px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-560-94"> 
    <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:8px;">
<div style="font-size:18px;line-height:15px;">Komentar</div>
</div>        </a>
      	<a href="#!/url=typography.php" class="tile group0 " style="margin-top: 485px; margin-left: 720px; width: 94px; height: 94px; display: block; background: rgb(103, 59, 183);" data-pos="485-720-94"> 
    <div style="line-height:30px; font-weight:300; margin-top:40px; margin-left:5px;">
<div style="font-size:20px;line-height:20px;">Ebook CR</div>
</div>        </a>
            </div>
        
        <div id="subNavWrapper"></div>
    	<div id="contentWrapper" <?php if($bot && $reqUrl != ""){ echo "style='display:block;'";}?>>   		    
	   		<?php triggerEvent("contentWrapperBegin");?>
            <div id="content">	        	
				<?php
				if($bot){	
					if($page == "" || $page == "home"){					
					}else{
						if(file_exists("pages/".$reqUrl)){	
							include("pages/".$reqUrl);
						}else{		
							echo $l_pageNotFoundDesc;
						}
					}		
				}
				?>
	        </div>
    	    <?php triggerEvent("contentWrapperEnd");?>
		</div>
        <?php triggerEvent("centerWrapperEnd");?>
    </div>
	<footer>
		<a title='Metro UI template' href='' target='_blank'></a>
		<?php 
		echo $siteFooter; 
		triggerEvent("siteFooter");
		?>
    </footer>
    <?php triggerEvent("wrapperEnd");?>
</div>
<div id="catchScroll"></div>
<?php triggerEvent("bodyEnd");?>
</body>
</html>