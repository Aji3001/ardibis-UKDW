
<button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#modalTambahUser">Tambah Pengguna</button>

<div class="card">
    <div class="card-body">
        <h6><b>Daftar Pengguna</b></h6>
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="tableUser">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1;foreach($user as $us):?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$us['nama']?></td>
                        <td><?=$us['jabatan']?></td>
                        <td>
                            <?php if($us['status']=='1'){echo 'aktif';}?>
                            <?php if($us['status']=='0'){echo 'nonaktif';}?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">Detail / Edit</a>
                            <a href="<?=base_url('setting/deleteUser')?>/<?=$us['id_user']?>" class="btn btn-sm btn-danger tombol-hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal tambah user -->
<div class="modal fade" id="modalTambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('setting/addPengguna')?>" method="post">
            <div class="form-group">
                <label for="">Nama Pengguna</label>
                <input autocomplete="off" name="nama" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Jabatan | <i><small>Opsional</small></i></label>
                <input autocomplete="off" name="jabatan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Catatan Khusus | <i><small>Opsional</small></i></label>
                <textarea autocomplete="off" name="catatan" class="form-control" id="" cols="30" rows="3"></textarea>
            </div>
            <hr>
            <h6><i class="fas fa-user mr-2"></i>Info Login</h6>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 mx-auto my-auto">
                        <label for="" class="mx-auto my-auto">Username</label><br>
                        <div id="userav"></div>
                    </div>
                    <div class="col-md-8">
                        <input type="text" autocomplete="off" name="username" id="username" class="form-control" placeholder="NIM / NIK / No Induk / lainnya.." required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 mx-auto my-auto">
                        <label for="" class="mx-auto my-auto" >Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control" id="txtNewPassword" disabled required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4 mx-auto my-auto">
                        <label for="" class="mx-auto my-auto">Ulangi Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" id="txtConfirmPassword" onChange="checkPasswordMatch();" disabled required>
                    </div>
                </div>
                <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
            </div>
            <hr>  
            <h6><i class="fas fa-shield-alt mr-2"></i>Hak Akses</h6>
            <div class="form-group">
                <div class="form-check">
                <input name ="dokumen" class="form-check-input" type="checkbox" value="" id="dokumen">
                <label class="form-check-label" for="dokumen">
                    Akses Dokumen
                </label>
                </div>
                <div class="form-check">
                <input name="user" class="form-check-input" type="checkbox" value="" id="user" >
                <label class="form-check-label" for="user">
                    Akses Daftar Pengguna
                </label>
                </div>
                <div class="form-check">
                <input name="setting" class="form-check-input" type="checkbox" value="" id="setting" >
                <label class="form-check-label" for="setting">
                    Akses Pengaturan
                </label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="tbhUser" disabled>Tambah Pengguna</button>
        </form>
      </div>
    </div>
  </div>
</div>