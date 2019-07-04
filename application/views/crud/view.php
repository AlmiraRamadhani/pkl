<div class="col-md-8">
  <h1 class="my-4">Daftar Gambar</h1>
  <br>
  <font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Halaman</th>
        <th scope="col">Edisi</th>
        <th scope="col">Tahun</th>
        <th scope="col">Gambar</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tmp as $key) { ?>
        <tr>
          <td><?php echo $key->halaman; ?></td>
          <td><?php echo $key->edisi; ?></td>
          <td><?php echo $key->tahun; ?></td>
          <td><img width="75" height="75" src="<?php echo base_url('gambar/' . $key->gambar) ?>"></td>
          <td>
            <?php echo anchor('crud/edit/' . $key->id, 'Edit', 'class="badge badge-info"');  ?>
            <?php echo anchor('crud/del/' . $key->id, 'Delete', array('class' => 'badge badge-danger', 'onclick' => "return confirmDialog();"));  ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript">
  function confirmDialog() {
    var x = confirm("Yakin akan di hapus?")
    if (x) {
      return true;
    } else {
      return false;
    }
  }
</script>