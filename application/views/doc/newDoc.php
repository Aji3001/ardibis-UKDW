<div class="row mb-3">
    <div class="col-md-4 ">
        <div class="card mb-3 ">
            <div class="card-body">
            <h6><b>Pilih Opsi Dokumen</b></h6>
                <form action="" method="get" id="getDataFilter">
                    <div class="form-group ">
                        <label for="">Kategori Dokumen</label>
                        <select name="kat" id="katselect" class="form-control">
                            <option value="" disabled selected>- pilih kategori -</option>
                            <?php foreach($kategori as $kat):?>
                                <option value="<?=$kat['id_kat']?>" <?php if(isset($_GET['kat'])&&$_GET['kat']==$kat['id_kat']){echo 'selected';}?>><?=$kat['nama_kategori']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <?php if(isset($subkategori)){?>
                        <div class="form-group">
                            <label for="">Sub Kategori</label>
                            <select name="subkat" id="subkatselect" class="form-control">
                                <option value="" selected disabled >- pilih sub kategori -</option>
                            <?php foreach($subkategori as $sub):?>
                                <option value="<?= $sub['id_sub_kategori']?>" <?php if(isset($_GET['subkat'])&&$_GET['subkat']==$sub['id_sub_kategori']){echo 'selected';}?>><?= $sub['nama_sub_kategori']?></option>
                            <?php endforeach?>
                            </select>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        
                        <label for="">Status Dokumen</label>
                        <select name="ket" id="keterangandok" class="form-control">
                            <option value="" selected disabled> - pilih keterangan -</option>
                            <option value="1" <?php if(isset($_GET['ket'])&&$_GET['ket']=='1'){echo 'selected';}?>>Surat Masuk</option>
                            <option value="2" <?php if(isset($_GET['ket'])&&$_GET['ket']=='2'){echo 'selected';}?>>Surat Keluar</option>
                            <option value="0" <?php if(isset($_GET['ket'])&&$_GET['ket']=='0'){echo 'selected';}?>>Tanpa Keterangan</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
    <?php if(isset($_GET['ket'])){?>
        <div class="card">
            <div class="card-body">
                <h6><b>Tambah Dokumen</b></h6>
            <form action="" method="post" >
                    <input type="hidden" name="id_kat" value="<?php if(isset($_GET['kat'])){echo $_GET['kat'];}?>">
                    <input type="hidden" name="id_sub_kat" value="<?php if(isset($_GET['subkat'])){echo $_GET['subkat'];}?>">
                    <input type="hidden" name="keterangan" value="<?php if(isset($_GET['ket'])){echo $_GET['ket'];}?>">
                    
                    <div class="form-group border-top" style="padding-top:10px">
                        <label for="">Nama Dokumen <b><span class="text-danger">*</span></b></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Catatan <b><span class="text-danger">**</span></b></label>
                        <textarea type="text" row=30 class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Unggah Dokumen | <i>pdf, word, png, jpg, jpeg</i> <b><span class="text-danger">*</span></b></label> <br>
                        <input type="file" class="btn btn-primary btn-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Dokumen diterima / dikirim <b><span class="text-danger">**</span></b></label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group border-top" style="padding-top:15px">
                        <div class="custom-control custom-switch ">
                            <input type="checkbox" class="custom-control-input" id="switchdurasi">
                            <label class="custom-control-label" for="switchdurasi">Tambahkan Durasi</label>
                        </div>
                    </div>
                    <div class="row border-bottom" id="usedate" style="display:none">
                        <div class="form-group col-md-6">
                            <label for="">Awal Berlaku</label>
                            <input type="date" name="start_date" class="form-control daterange" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Akhir Masa Berlaku</label>
                            <input type="date" name="end_date" class="form-control daterange" >
                        </div>
                    </div>
                    <div class="form-group" style="padding-top:15px">
                        <label for=""><b>Visibilitas</b></label>
                        <select name="" id="" class="form-control col-md-4 border border-warning">
                            <option value="">Publik</option>
                            <option value="">Hanya Pengguna Sistem</option>
                        </select>
                    </div>
                    <div class="form-group" style="padding-top:15px">
                        <b><span class="text-danger">* </span></b>: Wajib <br>
                        <b><span class="text-danger">**</span></b> : Opsional
                    </div>
    
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </form>
            </div>
        </div>
    <?php }?>
    </div>
</div>