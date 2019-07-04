<div class="col-md-8">
  <h1 class="my-4">Profil</h1>
  <h6><?php echo anchor('buletin/index', 'Home'); ?></h6>
  <br><br>
  <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
  <?php foreach ($tmp as $key) { ?>
    <img width="75" height="75" src="<?php echo base_url('gambar/' . $key->gambar) ?>">
  <?php } ?>