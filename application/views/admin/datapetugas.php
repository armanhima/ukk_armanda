<h1 class="h3 mb-4 mt-5 text-gray-800">Data Petugas</h1>

<div class="table-responsive">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Telp</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($data_petugas as $dp) : ?>
      <tr>
        <th scope="row"><?= $no++; ?></th>
        <td><?= $dp['nama_petugas']; ?></td>
        <td><?= $dp['telp']; ?></td>
        <td><?= $dp['level']; ?></td>
        <td>
        <?php if ($dp['username'] == $this->session->userdata('username')) : ?>
          <small>Tidak ada aksi</small>
        <?php else : ?>
          <a href="<?= base_url('Admin/PetugasController/edit/'.$dp['id_petugas']) ?>" class="btn btn-info">Edit</a>
          <a href="<?= base_url('Admin/PetugasController/delete/'.$dp['id_petugas']) ?>" class="btn btn-warning">Hapus</a>
        <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>