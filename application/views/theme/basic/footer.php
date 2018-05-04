
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://kautube.com" target="_blank">Tedir Ghazali</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <?php
        $footerpost = $this->sites->footerPost();
        if($footerpost == true){
          foreach($footerpost as $foot){
        ?>
        <li class="w3-padding-16" style="cursor:pointer" onclick="location.href='<?php echo base_url('blog/post/'.$foot->post_name.'.html') ?>'">
          <img src="https://unsplash.it/600/400?image=<?php echo $foot->ID ?>" class="w3-left w3-margin-right" style="width:50px"/>
          <span class="w3-large"><?php echo $foot->post_title ?></span><br>
          <span><?php echo strip_tags(substr($foot->post_content, 0, 200)) ?>...</span>
        </li>
        <?php
          }
        }
        ?> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-teal w3-margin-bottom">Kautube</span>
        <?php
        $footertags = $this->sites->footerTags();
        if($footertags == true){
          foreach($footertags as $tag){
        ?>
        <span onclick="location.href='<?php echo base_url('blog/tag/'.$tag->slug) ?>'" class="w3-tag w3-grey w3-small w3-margin-bottom" style="cursor:pointer"><?php echo $tag->name ?></span>
        <?php
          }
        }
        ?> 
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Copyright &copy; <?php echo date('Y') ?>. All Rights Reserved. Powered by <a href="https://kautube.com" title="Tedir Ghazali" target="_blank" class="w3-hover-opacity">Tedir Ghazali</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>