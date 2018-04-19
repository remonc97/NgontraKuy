<?php $this->view('template/Header'); ?>
<!-- banner -->
<div>
    <?php
        // List up all results.
        foreach ($results as $val)
        {
            echo $val['fasilitas'];
        }
    ?>
</div>


<?php $this->view('template/footer'); ?>