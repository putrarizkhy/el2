<?php
$mobile = false;


/* calculates margin left and top for tiles */
$tile[] = array("type"=>"slideshow","group"=>0,"x"=>0.35,"y"=>-0.25,"width"=>1.25,"height"=>1.25,"background"=>"#673BB7","url"=>"",
	/*"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),*/
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Live Report","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");

$tile[] = array("type"=>"centered","group"=>0,"x"=>1.65,"y"=>-0.25,'width'=>2.5,'height'=>0.6,"background"=>"#FFD600","backgroundHover"=>"#FFF",
	"color"=>"#FFF","colorHover"=>"#509601","url"=>"welcome.php",
	"title"=>"Transaksi",
	"img"=>"img/icons/box_info.png","imgAlt"=>"","imgTitle"=>"",
	"imgSize"=>"48",
	"imgToTop"=>"0",
	"imgToLeft"=>"0",
	"labelText"=>"",
	"labelColor"=>"#F90",
	"labelPosition"=>"top",
	"classes"=>"",
);

$tile[] = array("type"=>"centered","group"=>0,"x"=>1.65,"y"=>0.4,'width'=>2.5,'height'=>0.6,"background"=>"#FFD600","backgroundHover"=>"#FFF",
	"color"=>"#FFF","colorHover"=>"#509601","url"=>"welcome.php",
	"title"=>"Keuangan",
	"img"=>"img/icons/box_info.png","imgAlt"=>"","imgTitle"=>"",
	"imgSize"=>"48",
	"imgToTop"=>"0",
	"imgToLeft"=>"0",
	"labelText"=>"",
	"labelColor"=>"#F90",
	"labelPosition"=>"top",
	"classes"=>"",
);

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>4.25,"y"=>-0.25,"width"=>1.25,"height"=>1.25,"background"=>"#673BB7","url"=>"",
	/*"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),*/
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Anouncement","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");


/* line 2 */


$tile[] = array("type"=>"slide","group"=>0,"x"=>0,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BBD4","url"=>"books.php",
	"text"=>"<h3>Book</h3>","img"=>"img/Book-01.png","imgSize"=>0.55,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Book","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>1.5,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BBD4","url"=>"Ebooks.php",
	"text"=>"<h3>E-Book</h3>","img"=>"img/ebook-02.png","imgSize"=>0.55,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"E-Book","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>3,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BBD4","url"=>"Videos.php",
	"text"=>"<h3>Video</h3>","img"=>"img/video-03.png","imgSize"=>0.55,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Video","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>4.5,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BBD4","url"=>"Audios.php",
	"text"=>"<h3>Audio</h3>","img"=>"img/audio-04.png","imgSize"=>0.55,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Audio","labelColor"=>"#00BFFF","labelPosition"=>"top",
);



/* line 3 */


$tile[] = array("type"=>"scrollText","group"=>0,"x"=>0,"y"=>2.25,"width"=>2,"height"=>0.5,"background"=>"#CDDC39","url"=>"Catbooks.php",
"title"=>"Kategori","text"=>array( ),"scrollSpeed"=>2500);

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>2.25,"y"=>2.25,"width"=>0.5,"height"=>0.5,"background"=>"#00BBD4","url"=>"Members.php",
	/*"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),*/
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Member","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"");

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>3,"y"=>2.25,"width"=>0.5,"height"=>0.5,"background"=>"#00BBD4","url"=>"Photos.php",
	/*"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),*/
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Foto","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"");

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>3.75,"y"=>2.25,"width"=>2,"height"=>0.5,"background"=>"#CDDC39","url"=>"cds.php",
"title"=>"Pustaka Multimedia","text"=>array( ),"scrollSpeed"=>2500);


/* line 4 */

$tile[] = array("type"=>"custom","group"=>0,"x"=>0.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#673BB7","url"=>"DDCs.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:10px; margin-left:10px;'>
<div style='font-size:27px;line-height:30px;'>Kode DDC</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>1.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#673BB7","url"=>"Locations.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;'>
<div style='font-size:20px;line-height:15px;'>Location</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>2.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#673BB7","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;'>
<div style='font-size:20px;line-height:15px;'>Laporan</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>3.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#673BB7","url"=>"Comments.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:8px;'>
<div style='font-size:18px;line-height:15px;'>Komentar</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>4.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#673BB7","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:5px;'>
<div style='font-size:20px;line-height:20px;'>Ebook CR</div>
</div>");
	function getMarginLeft($group){
		global $scaleSpacing,$groupSpacing;
		$s=0;
		for($i=0;$i<$group;$i++){
			if(count($groupSpacing)>$i){ // if in array (to prevent errors);
				$s+=$groupSpacing[$i];
			}else{
				$s+=end($groupSpacing); // add last defined groupSpacing
			}
		}
		return $s*$scaleSpacing;
	}
	function getMarginTop($group){
		return 45;
	}

/* For DATA arguments */
function posVal($marginTop,$marginLeft,$width){
	echo " data-pos='".str_replace(".","_",$marginTop."-".$marginLeft.'-'.$width)."' ";
}

/* Generates tile titles  */
foreach($groupTitles as $l=>$title){
	?>
    <a href="#&amp;<?php echo strtolower(chars(str_replace(" ","-",$title)))?>" id="groupTitle<?php echo $l?>" class="groupTitle" style="margin-left:<?php echo getMarginLeft($l)?>px; margin-top:<?php echo getMarginTop($l)-45;?>px" onclick="javascript:$group.goTo(<?php echo $l?>);"><h3><?php echo $title?></h3></a>
    <?php
}

/* Generates tiles */
foreach($tile as $args){
	$n_args = array();
	foreach($tileTypes[$args['type']] as $key=>$std){
		if(array_key_exists($key,$args)){
			$n_args[] = $args[$key];
		}else{
			$n_args[] = $std;
		}
	}	
	call_user_func_array("tile_".$args['type'],$n_args);
}

?>