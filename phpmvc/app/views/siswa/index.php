<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
        </button>
        <br></br>

            <h3>Daftar Siswa</h3>
            <ul class="list-group">
              <?php foreach( $data['swa'] as $swa ) : ?>
                <li class="list-group-item">
                    <?= $swa['nama']; ?>
                    <a href="<?= BASEURL;?>/siswa/hapus/<?= $swa['id']; ?>" class="badge text-bg-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL;?>/siswa/ubah/<?= $swa['id']; ?>" class="badge text-bg-success float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal">ubah</a>
                    <a href="<?= BASEURL;?>/siswa/detail/<?= $swa['id']; ?>" class="badge text-bg-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
   
        </div>
    </div>
    
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/ siswa/tambah" method="post">
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nis" class="form-label">NIS</label>
                <input type="number" class="form-control" id="nis" name="nis">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Pemasaran">Pemasaran</option>
                    <option value="TBSM">TBSM</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>