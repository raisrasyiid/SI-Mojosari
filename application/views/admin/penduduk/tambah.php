<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Penduduk</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('penduduk/createPenduduk'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label pr-0">NIK</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="nama_lengkap" class="col-sm-2 col-form-label pr-0">Nama Lengkap</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-2 col-form-label pr-0">Jenis Kelamin</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="maleRadio" value="L" required>
                                        <label class="form-check-label" for="maleRadio">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="femaleRadio" value="P" required>
                                        <label class="form-check-label" for="femaleRadio">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label pr-0">Tempat Lahir</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="tgl_lahir" class="col-sm-2 col-form-label pr-0">Tanggal Lahir</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="pekerjaan" class="col-sm-2 col-form-label pr-0">Pekerjaan</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-5">
                                    <select name="agama" class="form-control" id="agama" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katholik">Katholik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="koghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label pr-0">Alamat</label>
                                <div class="col-sm-5">
                                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" autofocus required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info float-left" type="submit">Simpan</button>
                                <button type="button" class="btn btn-danger float-left ml-2" onclick="window.history.back()">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
