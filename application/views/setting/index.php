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
                    <th>Perlu Durasi</th>
                    <th>Jml Sub Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="">
            <?php $i=1; foreach($kategori as $kat):?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $kat['nama_kategori']?></td>
                    <td>
                        <?php
                            if($kat['use_exp']=='on'){echo'Ya';}
                            else{echo 'Tidak' ;};
                        ?>
                    </td>
                    <td><small>null</small></td>
                    <td>
                        <button type="button" onclick="show_subkat(<?=$kat['id_kat']?>)" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalSub<?= $kat['id_kat']?>">
                            Detail / Tambah Sub Kategori
                        </button>
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalDetail<?= $kat['id_kat']?>">
                            Ubah
                        </button>
                        <a href="<?= base_url()?>/setting/deleteCat/<?=$kat['id_kat']?>" class="btn btn-sm btn-danger tombol-hapus">Hapus</a>
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
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="use_exp" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Memerlukan Durasi</label>
                    </div>
                    <small>Beri tanda centang pada durasi apabila kategori ini memerlukan tanggal mulai dan tanggal selesai (durasi)</small>
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

<!-- modal sub kategori -->
<?php $i=1; foreach($kategori as $subkats):?>
<div class="modal fade" id="modalSub<?= $subkats['id_kat']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Tambah sub kategori untuk : <b><?= $subkats['nama_kategori']?></b></h6>

        <form action="<?= base_url('setting/addSubKat')?>" method="post" id="<?=$subkats['id_kat']?>">
            <div class="form-group">
                <label for="">Nama Sub Kategori</label>
                <input type="hidden" class="foridsubkat" name="id" value="<?=$subkats['id_kat']?>">
                <input type="text" name="nama" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="checkbox" name="use_exp" class="custom-control-input" id="subkatId<?=$subkats['id_kat']?>">
                <label class="custom-control-label" for="subkatId<?=$subkats['id_kat']?>">Memerlukan Durasi</label>
                </div>
                <small>Beri tanda centang pada durasi apabila kategori ini memerlukan tanggal mulai dan tanggal selesai (durasi)</small>
            </div>
            <button type="submit" class="btn btn-sm btn-success mb-3 subkatsubmit">Tambah Sub Kategori</button>
        </form>
        <small>Daftar Sub Kategori</small>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Sub</th>
                    <th>Durasi ?</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="resultKat">
               
            </tbody>
         </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type=text/javascript>
    var idsubs= '<?=$subkats['id_kat']?>';
    $(function () {
        $('#'+<?=$subkats['id_kat']?>+'').on('submit', function (e) {
			e.preventDefault();
			$.ajax({
				type: 'post',
				url: '<?= base_url('setting/addSubKat')?>',
				data: $('#'+<?=$subkats['id_kat']?>+'').serialize(),
				success: function () {
					toastr.success("Sub Kategori Berhasil Disimpan ");
                    $('#'+<?=$subkats['id_kat']?>+'')[0].reset();
                    show_subkat(''+<?=$subkats['id_kat']?>+'');
				}
			});
        });
    });
    
    function show_subkat(id){
      var id_kat=id;
        $.ajax({
            type  : 'ajax',
            url   : '<?=base_url('setting/getSubKatJson')?>/'+id_kat+'',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td>'+i+'</td>'+
                            '<td>'+data[i].nama_sub_kategori+'</td>'+
                            '<td>'+data[i].use_exp+'</td>'+
                            '<td><button class="btn btn-sm btn-danger" onclick="hapusSub('+data[i].id_sub_kategori+')">hapus</button></td>'+
                            '</tr>';
                }
                $('.resultKat').html(html);      
            }

        });
    };

    function hapusSub(ids)
    {
        var id_sub_kat = ids;
        $.ajax({
            type : "POST",
            url  : "<?= base_url('setting/deleteSubKat')?>",
            // dataType : "JSON",
            data : {id_sub_kat:id_sub_kat},
            success: function(){
                toastr.error("Sub Kategori Dihapus ");
                show_subkat(''+<?=$subkats['id_kat']?>+'');
            }
        });
    };
    
</script>
<?php endforeach?>

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
        <div class="form-group">
            <div class="custom-control custom-checkbox">
            <input type="checkbox" <?php if($detail['use_exp']=='on'){echo'checked';}?> name="use_exp" class="custom-control-input" id="ckDet<?=$detail['id_kat']?>">
            <label class="custom-control-label" for="ckDet<?=$detail['id_kat']?>">Memerlukan Durasi</label>
            </div>
            <small>Beri tanda centang pada durasi apabila kategori ini memerlukan tanggal mulai dan tanggal selesai (durasi)</small>
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