<div class="sidebarpage">

  <div id="subNav">
      <a href="#!/url=photos.php"><img src="img/Logomenu1-12.png" class="upbutton"> Daftar Photo</a>
      <a href="#!/url=favphotos.php"><img src="img/Logomenu2-13.png" class="upbutton"> Photo Favorit</a>
      <a href="#!/url=findphotos.php"><img src="img/Logomenu3-14.png" class="upbutton"> Cari</a>
  </div>
  <div id="a" class="Photo imageNavinside">&nbsp;</div>
  
  <div>
    <ul id="side">
  <h3>
    <a>Tambah Daftar Photo</a>
  </h3>
  <h3>
    <a>Cetak Daftar Photo</a>
  </h3>
  </ul>
</div>
</div>

<div class="mask1">
  <div class="assets index">


    <h2>Pencarian Photo</h2>
    <div class="content-box">
    <div class="content-box-content">
      <div class="tags">
        <form enctype="multipart/form-data" id="BookAdminSearchForm" method="post" >
          <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>                                    <fieldset>
          <div class="input-control text" style="width:70%;">
              <input type="text" placeholder="ketikkan pencarian " name="data[Book][keyword]">
              <button type="submit" class="btn-search" id="searchPhotosubmit"><img src="img/Logomenu3-14.png" class="scbutton"></button>
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