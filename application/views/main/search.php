
<div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Cari Data</h6>
    </div>
    <div class="card-body">
        <form action="" id="filter" method="get">
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" id="key" class="form-control" name="key" placeholder="kata kunci" value="<?php if(isset($_GET['key'])){echo $_GET['key'];}?>">
                </div>
                <div class="form-group col-md-3">
                    <select name="kategori" id="kategori" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option value="default" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'default' ? 'selected=""' : '' ?>>Tidak memilih kategori</option>
                        <option value="sk" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'sk' ? 'selected=""' : '' ?>>SK</option>
                        <option value="kategori2" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'kategori2' ? 'selected=""' : '' ?>>Kategori 2</option>
                    </select>
                </div>
                <!-- <div class="form-group col-md-3">
                    <select name="kategori" id="kategori" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option value="default" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'default' ? 'selected=""' : '' ?>>Tidak memilih kategori</option>
                        <option value="kategori1" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'kategori1' ? 'selected=""' : '' ?>>Kategori 1</option>
                        <option value="kategori2" <?= isset($_GET['kategori']) && $_GET['kategori'] == 'kategori2' ? 'selected=""' : '' ?>>Kategori 2</option>
                    </select>
                </div> -->
                <div class="form-group col-md-3">
                    <select name="keterangan" id="keterangan" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" >
                        <option value="default" <?= isset($_GET['keterangan']) && $_GET['keterangan'] == 'default' ? 'selected=""' : '' ?>>Tidak memilih keterangan</option>
                        <option value="masuk"  <?= isset($_GET['keterangan']) && $_GET['keterangan'] == 'masuk' ? 'selected=""' : '' ?>>Surat Masuk</option>
                        <option value="keluar"  <?= isset($_GET['keterangan']) && $_GET['keterangan'] == 'keluar' ? 'selected=""' : '' ?>>Surat Keluar</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Filter Tahun</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input gets" type="checkbox" <?= isset($_GET['2018']) && $_GET['2018'] == 'true' ? 'checked=""' : '' ?> id="2018" name="2018" value="true">
                        <label class="form-check-label" for="2018">2018</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input gets" type="checkbox" <?= isset($_GET['2019']) && $_GET['2019'] == 'true' ? 'checked=""' : '' ?> id="2019" name="2019" value="true">
                        <label class="form-check-label" for="2019">2019</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input gets" type="checkbox" <?= isset($_GET['2020']) && $_GET['2020'] == 'true' ? 'checked=""' : '' ?> id="2020" name="2020" value="true">
                        <label class="form-check-label" for="2020">2020</label>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="">Filter Bulan</label><br>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['1']) && $_GET['1'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="1" value="true" onclick="" id="Januari">
                        <label class="form-check-label" for="Januari">Januari</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['2']) && $_GET['2'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="2" value="true" id="Februari">
                        <label class="form-check-label" for="Februari">Februari</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['3']) && $_GET['3'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="3" value="true" id="Maret">
                        <label class="form-check-label" for="Maret">Maret</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['4']) && $_GET['4'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="4" value="true" id="April">
                        <label class="form-check-label" for="April">April</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['5']) && $_GET['5'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="5" value="true" id="Mei">
                        <label class="form-check-label" for="Mei">Mei</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['6']) && $_GET['6'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="6" value="true" id="Juni">
                        <label class="form-check-label" for="Juni">Juni</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['7']) && $_GET['7'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="7" value="true" id="Juli">
                        <label class="form-check-label" for="Juli">Juli</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['8']) && $_GET['8'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="8" value="true" id="Agustus">
                        <label class="form-check-label" for="Agustus">Agustus</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['9']) && $_GET['9'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="9" value="true" id="September">
                        <label class="form-check-label" for="September">September</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['10']) && $_GET['10'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="10" value="true" id="Oktober">
                        <label class="form-check-label" for="Oktober">Oktober</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" <?= isset($_GET['11']) && $_GET['11'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="11" value="true" id="November">
                        <label class="form-check-label" for="November">November</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input type="checkbox" <?= isset($_GET['12']) && $_GET['12'] == 'true' ? 'checked=""' : '' ?> class="form-check-input gets" name="12" value="true" id="Desember">
                        <label class="form-check-label" for="Desember">Desember</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right">Cari Dokumen</button>
            <button type="button" class="btn btn-outline text-danger float-right reset">Bersihkan Form</button>
        </form>
    </div>
</div>


<div class="card mt-3 mb-3">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Hasil Pencarian</h6>
    </div>
    <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="tableis">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Dokumen</th>
                    <th>Kategori Dokumen</th>
                    <th>Dari / Untuk</th>
                    <th>Tgl Surat / Durasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>1</td>
                    <td>Tes Dokumen 1</td>
                    <td>Surat Kerja</td>
                    <td>PPLK</td>
                    <td>01-06-2020</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Detail</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tes Dokumen 2</td>
                    <td>Kategori 2</td>
                    <td>PPLK</td>
                    <td>01-12-2019</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info">Detail</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            