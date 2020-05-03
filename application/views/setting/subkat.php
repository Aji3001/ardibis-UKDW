<a href="<?= base_url('setting')?>" class="btn btn-secondary btn-sm mb-3"><i class="fas fa-arrow-left mr-1"></i>Kembali</a>

<button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#modalTambah">
  Tambah Sub Kategori
</button>

<div class="card">
    <div class="card-body">
        <?php foreach($namakat as $kat):?>
        <h4><b><?= $kat['nama_kategori']?></b></h4>
        <?php endforeach?>
        <h6>Daftar Sub Kategori</h6>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover dt2">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Sub Kategori</th>
                        <th>Perlu Durasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php $i=1; foreach($subkategori as $sub):?>
                    <tr>
                        <td><?= $i++?></td>
                        <td><?= $sub['nama_sub_kategori']?></td>
                        <td>
                            <?php if($sub['use_exp']=='on'){echo ' Ya';}?>
                            <?php if($sub['use_exp']=='off'){echo ' Tidak';}?>
                        </td>
                        <td>
                            <a href="<?= base_url()?>setting/hapusSub/<?= $sub['id_sub_kategori']?>/<?= $sub['id_kat']?>" class="btn btn-sm btn-danger tombol-hapus">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach($namakat as $add):?>
        Tambah sub kategori untuk kategori <b><?=$add['nama_kategori']?></b>
        <div class="mb-2"></div>
        <form action="<?= base_url('setting/addSubKat')?>" method="post">
            <input type="hidden"  name="id" value="<?=$add['id_kat']?>">
            <div class="form-group">
                <label for="">Nama Sub Kategori</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="checkbox" name="use_exp" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Memerlukan Durasi</label>
                </div>
                <small>Beri tanda centang pada durasi apabila sub kategori ini memerlukan tanggal mulai dan tanggal selesai (durasi)</small>
            </div>
        
        <?php endforeach?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>