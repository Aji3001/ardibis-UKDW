<div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Dokumen</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Kategori Dokumen</label>
                <select name="" id="" class="form-control">
                    <option value="">SK</option>
                    <option value="">Kategori 2</option>
                    <option value="">Kategori 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Keterangan Dokumen</label>
                <select name="" id="" class="form-control">
                    <option value="">Tanpa keterangan</option>
                    <option value="">Surat Masuk</option>
                    <option value="">Surat Keluar</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Judul Dokumen</label>
                <input type="text" class="form-control">
            </div>
           
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea type="text" row=30 class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Unggah Dokumen | <i>pdf, word, png, jpg, jpeg</i></label> 
                <input type="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tanggal Dokumen diterima / dikirim</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Durasi Dokumen <i>(khusus | opsional)</i></label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Visibilitas</label>
                <select name="" id="" class="form-control">
                    <option value="">Publik</option>
                    <option value="">Hanya Pengguna Sistem</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success float-right">Simpan</button>

        </form>
    </div>
</div>