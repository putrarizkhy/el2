<?php
$subNav = array(
	"Kategori Buku ; CatBooks.php ; #509601;",
  "Kategori Ebook ; CatEbooks.php ; #509601;",
	"Kategori Video ; CatVideos.php ; #509601;",
  "Kategori Audio ; CatAudios.php ; #509601;",
  "Kategori Foto ; CatPhotos.php ; #509601;",
  "Kategori CD Pembelajaran ; Catcds.php ; #509601;",
);


set_include_path("../");
include_once("inc/essentials.php");


?>

<script>
/*$mainNav.set("tilegroup 2")*/
</script>



<div class="sidebarpage">

  <div id="a" class="Category imageNavinside">&nbsp;</div>
	
  <div>
    <ul id="side">
  <h3>
    <a>Tambah Daftar Kategori</a>
  </h3>
  
  </ul>
</div>
                        
</div>

<div class="mask1">
  <div class="transpa actions">
    <table class="tablese hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
          <th >ID</th>
          <th class="largest-rows"><a href="#">Kategori</a></th>
          <th class="largest-rows"><a href="#">Keterangan</a></th>
          <th class="largest-rows"><a href="#">Dibuat</a></th>
          <th class="largest-rows"><a href="#">Diubah</a></th>
          <th class="largest-rows actions">Actions</th>
        </tr>
      </thead>
      <tbody id="booktable">
        <?php 
        $no = 0;
        ?>
        
        <?php $no++; ?>

        <tr class="altrow ">

          <td>52</td>
          <td>Fiksi</td>
          <td>asd</td>
          <td>2012-12-03</td>
          <td>2012-03-02</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Edit</a>

            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Hapus</a>

          </td>
        </tr>

        <tr class="altrow ">

          <td>52</td>
          <td>Fiksi</td>
          <td>asd</td>
          <td>2012-12-03</td>
          <td>2012-03-02</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Edit</a>

            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Hapus</a>

          </td>
        </tr>

        <tr class="altrow ">

          <td>52</td>
          <td>Fiksi</td>
          <td>asd</td>
          <td>2012-12-03</td>
          <td>2012-03-02</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Edit</a>

            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Hapus</a>

          </td>
        </tr>

        <tr class="altrow ">

          <td>52</td>
          <td>Fiksi</td>
          <td>asd</td>
          <td>2012-12-03</td>
          <td>2012-03-02</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Edit</a>

            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Hapus</a>

          </td>
        </tr>

        <tr class="altrow ">

          <td>52</td>
          <td>Fiksi</td>
          <td>asd</td>
          <td>2012-12-03</td>
          <td>2012-03-02</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Edit</a>

            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" ><i class=" icon-pencil on-right"></i> Hapus</a>

          </td>
        </tr>

        

        
        
        


        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div>
</div>