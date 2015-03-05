<?php
$subNav = array(
	"Welcome ; welcome.php ; #509601;",
	"Accordions ; accordions.php ; #509601;",
	"Sidebars ; sidebars.php ; #509601;",
);


set_include_path("../");
include_once("inc/essentials.php");

/*Include a sidebar */
include_once("inc/sidebar.php");
showSidebar("some_info");
?>

<script>
/*$mainNav.set("tilegroup 2")*/
</script>


<h1 class="margin-t-0">Sidebars</h1>
<hr>
<p>This page will have a sidebar on the left.
<p>Did you know we can have a sidebar in a sidepanel? Click <a href="panels/example.php">here</a> to see the example.
<p>By the way, you can link to any metro page using the method like this (check source): <a <?php metroLink("welcome.php")?>>Link to welcome page</a>.
<p>If you prefer to open it in a new tab, you can do that this way: <a <?php metroLink("newtab:welcome.php")?>>Link to new tab</a>.
<p>Easy, isn't it?

<div class="mask1">
  <div class="actions">
    <table class="table hovered" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="title_table">
          <th>ID</th>
          <th class="largest-row"><a href="#">Judul</a></th>
          <th><a href="#">Kategori</a></th>
          <th><a href="#">Penerbit</a></th>
          <th><a href="#">Pengarang</a></th>
          <th><a href="#">Dipinjam</a></th>
          <th><a href="#">Rusak</a></th>
          <th><a href="#">Tersedia</a></th>
          <th><a href="#">Letak</a></th>
          <th class="actions">Actions</th>
        </tr>
      </thead>
      <tbody id="booktable">
        <?php 
        $no = 0;
        ?>
        <?php foreach ($listbook as $entry) : ?>
        <?php $no++; ?>

        <tr class="altrow ">

          <td>12</td>
          <td style="text-align:left;">Buku baru</td>
          <td>Fiksi</td>
          <td>monitor publisher</td>
          <td>Prof.Mul</td>
          <td>3</td>
          <td>2</td>
          <td>
            5
          </td>
          <td>H5</td>
          
          <td class="actions">
            <a class="gotolinkanchor" data-title="View Book" data-width="900px" data-height="600px" href="<?php echo $this->webroot;?>admin/books/view/<?php echo $entry['Book']['id'];?>"><i class=" icon-new-tab on-right"></i> Lihat</a>
            
            <a class="gotolinkanchor" data-title="Edit Book" data-width="900px" data-height="600px" href="<?php echo $this->webroot;?>admin/books/edit/<?php echo $entry['Book']['id'] ?>"><i class=" icon-pencil on-right"></i> Edit</a>

            <div>
              <?php echo $form->create('Book',array('id'=>'bookform_do_fav_'.$entry['Book']['id'],'action'=>'admin_do_favorite','style'=>'margin:0;'));
                echo $form->input('BookFav.id',array('type'=>'hidden','value'=>$entry['Book']['id']));
              ?>

              <?php if($entry['Book']['favorite'] == 0):?>

                <?php echo $form->input('BookFav.action',array('type'=>'hidden','value'=>1));?>
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i> Jadikan Fav</a>
              <?php else:?>
                <?php echo $form->input('BookFav.action',array('type'=>'hidden','value'=>0));?>
                <a data-entryid="<?php echo $entry['Book']['id'];?>" id="do_fav_<?php echo $entry['Book']['id']?>" href="#" class="nongoldehlo"><i class=" icon-star on-right"></i>  Buang dari Fav</a>
              <?php endif;?>
              <?php echo $form->end();?>

            </div>

            <a class="printview opennewtab" href="<?php echo $this->webroot;?>admin/books/barcode/<?php echo $entry['Book']['id']?>" ><i class="icon-printer on-right"></i> Print barcode</a>

            <a class="deleteitemtable" href="<?php echo $this->webroot;?>admin/books/delete/<?php echo $entry['Book']['id']?>" ><i class="icon-remove on-right"></i> Hapus</a>


          </td>
        </tr>

        
        <?php endforeach;?>
        


        
      </tbody>
    </table>
    <!--div class="bottom_line1">&nbsp;</div-->
  </div>
</div>

