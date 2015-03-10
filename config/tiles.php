<?php
/* All tiles on the homepage are configured here, be sure to check the tutorials/docs on http://metro-webdesign.info */

/* GROUP 1 */

/* line 1 */

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>0.35,"y"=>-0.25,"width"=>1.25,"height"=>1.25,"background"=>"#6950ab","url"=>"",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Live Report","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");

$tile[] = array("type"=>"centered","group"=>0,"x"=>1.65,"y"=>-0.25,'width'=>2.5,'height'=>0.6,"background"=>"#509601","backgroundHover"=>"#FFF",
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

$tile[] = array("type"=>"centered","group"=>0,"x"=>1.65,"y"=>0.4,'width'=>2.5,'height'=>0.6,"background"=>"#509601","backgroundHover"=>"#FFF",
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

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>4.25,"y"=>-0.25,"width"=>1.25,"height"=>1.25,"background"=>"#6950ab","url"=>"",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Anouncement","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");


/* line 2 */

/*
$tile[] = array("type"=>"custom","group"=>0,"x"=>0,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:5px;'>
<div style='color:#FFF;font-size:43px;line-heigt:70px;'>CHECK</div>
<span style='color:#FFF;font-size:32px;'><strong>OUT</strong></span><span style='color:#BBB;font-size:32px;'>THE</span>
<div style='font-size:57px;line-height:30px;'>TYPO</div>
<div style='font-size:37px;line-height:40px;'>GRAPHY</div>
</div>"); 
*/
/*
$tile[] = array("type"=>"custom","group"=>0,"x"=>0,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:100px; margin-left:10px;'>
<div style='font-size:57px;line-height:30px;'>Book</div>
</div>");
*/
$tile[] = array("type"=>"slide","group"=>0,"x"=>0,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BFFF","url"=>"books.php",
	"text"=>"<h3>Book</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Book","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>1.5,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BFFF","url"=>"Ebooks.php",
	"text"=>"<h3>E-Book</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"E-Book","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>3,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BFFF","url"=>"Videos.php",
	"text"=>"<h3>Video</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Video","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>0,"x"=>4.5,"y"=>0.99,'width'=>1.25,'height'=>1.25,"background"=>"#00BFFF","url"=>"Audios.php",
	"text"=>"<h3>Audio</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Audio","labelColor"=>"#00BFFF","labelPosition"=>"top",
);



/* line 3 */

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>0,"y"=>2.25,"width"=>2,"height"=>0.5,"background"=>"#FF8000","url"=>"http://metro-webdesign.info",
"title"=>"Kategori","text"=>array(
"You're now using the lite version of the metro template!",
"It's meant to just test the template.",
"It lacks many features of the premium version."
),"scrollSpeed"=>2500);

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>2.25,"y"=>2.25,"width"=>0.5,"height"=>0.5,"background"=>"#6950ab","url"=>"",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Member","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");

$tile[] = array("type"=>"slideshow","group"=>0,"x"=>3,"y"=>2.25,"width"=>0.5,"height"=>0.5,"background"=>"#6950ab","url"=>"",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Foto","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>3.75,"y"=>2.25,"width"=>2,"height"=>0.5,"background"=>"#FF8000","url"=>"http://metro-webdesign.info",
"title"=>"Pustaka Multimedia","text"=>array(
"You're now using the lite version of the metro template!",
"It's meant to just test the template.",
"It lacks many features of the premium version."
),"scrollSpeed"=>2500);


/* line 4 */

$tile[] = array("type"=>"custom","group"=>0,"x"=>0.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:10px; margin-left:10px;'>
<div style='font-size:27px;line-height:30px;'>Kode DDC</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>1.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;'>
<div style='font-size:20px;line-height:15px;'>Location</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>2.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:10px;'>
<div style='font-size:20px;line-height:15px;'>Laporan</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>3.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:8px;'>
<div style='font-size:18px;line-height:15px;'>Komentar</div>
</div>");

$tile[] = array("type"=>"custom","group"=>0,"x"=>4.5,"y"=>2.75,'width'=>0.65,'height'=>0.65,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; font-weight:300; margin-top:40px; margin-left:5px;'>
<div style='font-size:20px;line-height:20px;'>Ebook CR</div>
</div>");


/* GROUP 2*/

/*
$tile[] = array("type"=>"simple","group"=>1,"x"=>0,"y"=>0,'width'=>2,'height'=>1,"background"=>"#6950AB","url"=>"newtab:http://metro-webdesign.info/#!/docs-and-tutorials",
	"title"=>"<span style='font-size:24px;'>Check the tutorials</span>",
	"text"=>"be <em>CREATIVE</em> and <em>MODIFY</em> this example. It's just an example, play with the tiles!",
	"img"=>"img/icons/box_warning.png","imgSize"=>"50","imgToTop"=>"5","imgToLeft"=>"5",
	"labelText"=>"Metro-Webdesign","labelColor"=>"#453B5E","labelPosition"=>"bottom");

$tile[] = array("type"=>"slide","group"=>1,"x"=>0,"y"=>1,'width'=>2,'height'=>1,"background"=>"#00BFFF","url"=>"sidebars.php",
	"text"=>"<h3>A page with sidebar</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"A slide tile","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slideshow","group"=>1,"x"=>2,"y"=>0,"width"=>1,"height"=>1,"background"=>"#6950ab","url"=>"newtab:http://google.com",
	"images"=>array("img/chars/a.png","img/chars/b.png","img/chars/c.png","img/chars/d.png","img/chars/e.png","img/chars/f.png","img/chars/g.png"),
	"effect"=>"slide-right, slide-left, slide-down, slide-up, flip-vertical, flip-horizontal, fade",
	"speed"=>1500,"arrows"=>false,
	"labelText"=>"Random fx","labelColor"=>"#453B5E","labelPosition"=>"top");
	

	
/* GROUP 3 *//*
$tile[] = array("type"=>"img","group"=>2,"x"=>0,"y"=>0,'width'=>1,'height'=>1,"background"=>"#0F6D32","url"=>"",
	"img"=>"img/img3.jpg","desc"=>"By adding the CSS class 'noClock' to this tile, we've achieved that there is no hover effect!",
	"showDescAlways"=>true,"imgWidth"=>1,"imgHeight"=>1,
	"labelText"=>"Img Tile","labelColor"=>"#509601","labelPosition"=>"bottom", "classes"=>"noClick");
	
$tile[] = array("type"=>"slide","group"=>2,"x"=>1,"y"=>0,'width'=>2,'height'=>1,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
); */
?> 