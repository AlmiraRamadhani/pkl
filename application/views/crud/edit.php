  <div class="col-md-4">
    <h1 class="my-4">Edit</h1>
    <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
    <?php echo form_open('crud/update/' . $tmp->id, ''); ?>
    <div class="form-group">
      <label for="halaman">Halaman</label>
      <input type="text" name="halaman" class="form-control" value="<?php echo $tmp->halaman; ?>">
      <?php echo form_error('halaman', '<div class="text-danger"><small>', '</small></div>'); ?>
    </div>
    <div class="form-group">
      <label for="edisi">Edisi</label>
      <input type="edisi" name="edisi" class="form-control" value="<?php echo $tmp->edisi; ?>">
      <?php echo form_error('edisi', '<div class="text-danger"><small>', '</small></div>'); ?>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="text" name="tahun" class="form-control" value="<?php echo $tmp->tahun; ?>">
      <?php echo form_error('tahun', '<div class="text-danger"><small>', '</small></div>'); ?>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar</label>
      <?php echo form_upload(['name' => 'gambar', 'class' => 'form-control']); ?>
    </div>
    <button type="submit" class="btn btn-primary">Update Now!</button>
    <?php echo form_close(); ?>

  </div>