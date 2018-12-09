<div class="container mt-4">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#formModal">
			  Tambah Data Mahasiswa
			</button>

			<h3>Daftar Mahasiswa</h3>

				<ul class="list-group mt-3">
					<?php foreach ($data['mhs'] as $mhs) : ?>
						<li class="list-group-item">
							<?= $mhs['nama']; ?>
							<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger float-right ml-2" onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>		
							<a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="btn btn-warning float-right ml-2">edit</a>	
							<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary float-right ml-2">detail</a>	
						</li>
					<?php endforeach; ?>
				</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
		<div class="form-group">
		    <label for="nama">Nama</label>
		    <input type="text" class="form-control" id="nama" name="nama">
		 </div>
		 <div class="form-group">
		    <label for="nrp">NRP</label>
		    <input type="number" class="form-control" id="nrp" name="nrp">
		 </div>
		 <div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
		 </div>
		 <div class="form-group">
		    <label for="jurusan">Jurusan</label>
		    <select class="form-control" id="jurusan" name="jurusan">
		      <option value="Teknik Informatika">Teknik Informatika</option>
		      <option value="Sistem Informasi">Sistem Informasi</option>
		      <option value="Teknik Sipil">Teknik Sipil</option>
		      <option value="Multimedia">Multimedia</option>
		    </select>
		  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>