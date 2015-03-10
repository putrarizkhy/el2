<?php
$subNav = array(
	"Daftar Buku ; books.php ; #509601;",
  "Buku Favorit ; favbooks.php ; #509601;",
	"Cari ; findbooks.php ; #509601;",
);


set_include_path("../");
include_once("inc/essentials.php");


?>

<script>
/*$mainNav.set("tilegroup 2")*/
</script>



<div class="sidebarpage">
	asdkasd
</div>

<div class="mask1">
  <div class="assets index">


    <h2>Pencarian Ebook</h2>
    <div class="content-box">
    <div class="content-box-content">
      <div class="tags">
        <form enctype="multipart/form-data" id="BookAdminSearchForm" method="post" >
          <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>                                    <fieldset>
          <div class="input-control text" style="width:70%;">
              <input type="text" placeholder="ketikkan pencarian " name="data[Book][keyword]">
              <button type="submit" class="btn-search" id="searchbooksubmit"></button>
          </div>
        </form>                                  
      </div>
    <!--<?php
      echo $form->create('Lab', array('action'=>'find','class'=>'search'));
      echo '<p>';
      echo 'Judul: '.$form->input('title', array('div' => false,'label'=>false,'class'=>'text-input small-input'));
      echo 'Mata Pelajaran: '.$form->select('matapelajaran',$listMataPelajaran,array('label'=>false,'class'=>'text-input small-input'));
      
      
      $arrayKelas = array(10=>10,11=>11,12=>12);
      echo 'Kelas: '.$form->select('kelas',$arrayKelas,array('label'=>false,'class'=>'text-input small-input'));
      $arraySemester = array(null=>'Pilih Semua','1'=>'Ganjil','2'=>'Genap');
      echo '</p>';
      echo '<p>';

      echo 'Penulis: '.$form->select('author',$listGuru,null,array('label'=>false,'class'=>'text-input small-input'));
      echo '</p>';
      //echo $form->input('matapelajaran', array('div' => false, 'options' => $listMataPelajaran));
      //echo $form->input('status', array('div' => false, 'multiple' => 'checkbox', 'options' => array('open', 'closed')));
      echo '<p>';
      echo $form->submit(__('Search', true), array('div' => false,'class'=>'button'));
      echo '</p>';
      echo $form->end();
    ?>-->
    </div>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div>
</div>