<div class="col-md-4">
  <h1 class="my-4">Add</h1>
  <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
  <?php echo form_open('crud/add', ''); ?>
  <div class="form-group">
    <label for="halaman">Halaman</label>
    <input type="text" name="halaman" class="form-control" id="halaman">
    <?php echo form_error('halaman', '<div class="text-danger"><small>', '</small></div>'); ?>
  </div>
  <div class="form-group">
    <label for="edisi">Edisi</label>
    <select name="edisi" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="Profil">Profil</option>
    </select>
  </div>
  <div class="col-md-2">
    <?php echo form_error('edisi', '<span class="text-danger">', '</span>') ?>
  </div>
  <div class="form-group">
    <label for="tahun">Tahun</label>
    <input type="text" name="tahun" class="form-control" id="tahun">
    <?php echo form_error('tahun', '<div class="text-danger"><small>', '</small></div>'); ?>
  </div>
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <?php echo form_upload(['name' => 'gambar', 'class' => 'form-control']); ?>
  </div>
  <button type="submit" class="btn btn-primary" value="upload" name="submit">Submit</button>
  <?php echo form_close(); ?>
</div>