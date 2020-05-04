<div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase mb-1">Kategori Dokumen</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">5 Kategori</div>
                    <!-- <div class="mt-2 mb-0 text-muted text-xs">
                        <span>terakhir diparha</span>
                    </div> -->
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalKategori"
                    id="#myBtn">
                        Tambah Kategori
                    </button>
                </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="tableis">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Jml Sub Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="">
            <?php $i=1; foreach($kategori as $kat):?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $kat['nama_kategori']?></td>
                    <td><small><?= $kat['jumlah_sub']?> Kategori</small></td>
                    <td>
                        <a href="<?=base_url()?>setting/subkat/<?=$kat['id_kat']?>" class="btn btn-sm btn-success">
                            Detail Sub Kategori
                        </a>
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalDetail<?= $kat['id_kat']?>">
                            Ubah
                        </button>
                        <a href="<?= base_url()?>/setting/deleteCat/<?=$kat['id_kat']?>" class="btn btn-sm btn-danger tombol-hapus <?php if($kat['jumlah_sub']!='0'){echo 'disabled';}?>" >Hapus</a>
                    </td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?=base_url('setting/insertCat')?>" method="post">
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" autocomplete='off' required>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi <small><i>Opsional</i></small></label>
                    <textarea name="deskripsi" id=""  class="form-control" cols="30" rows="5"></textarea>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- modal detail -->
<?php $i=1; foreach($kategori as $detail):?>
<div class="modal fade" id="modalDetail<?= $detail['id_kat']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?=base_url('setting/editCat')?>" method="post">
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="hidden" name="id" value="<?=$detail['id_kat']?>">
            <input type="text" name="nama" class="form-control" value="<?= $detail['nama_kategori']?>" required>
        </div>
        <div class="form-group">
            <label for="">Deskripsi <small><i>Opsional</i></small></label>
            <textarea name="deskripsi" id=""  class="form-control" cols="30" rows="5"><?= $detail['deskripsi']?></textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach?>