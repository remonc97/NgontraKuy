  <?php
defined('BASEPATH') OR exit('No direct script access allowed');
#include header file
$this->view('template/header');
?>
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <?php
    if($featured == true){
        foreach($featured as $row){
    ?>
    <a href="<?php echo base_url('blog/post/'.$row->post_name.'.html') ?>">
    <div class="w3-third w3-container w3-margin-bottom" style="height:450px;">
      <img src="https://unsplash.it/600/400?image=<?php echo $row->ID ?>" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b><?php echo $row->post_title ?></b></p>
        <p><?php echo strip_tags(substr($row->post_content, 0, 350)) ?>...</p>
      </div>
    </div>
    </a>
    <?php
        }
    } else{

    }
    ?>
  </div>
  <?php
#include footer file
$this->view('template/footer');
?>