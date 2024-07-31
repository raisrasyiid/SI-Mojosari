<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Penduduk</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url('penduduk/editPenduduk'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_penduduk" value="<?php echo $penduduk->id_penduduk; ?>">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row mb-3">
                                        <label for="nik" class="col-sm-3 col-form-label pr-0">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nik" name="nik" required value="<?php echo ucwords($penduduk->nik); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="nama_lengkap" class="col-sm-3 col-form-label pr-0">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required value="<?php echo ucwords($penduduk->nama_lengkap); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="tempat_lahir" class="col-sm-3 col-form-label pr-0">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required value="<?php echo ucwords($penduduk->tempat_lahir); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="tgl_lahir" class="col-sm-3 col-form-label pr-0">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?php echo $penduduk->tgl_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-sm-3 col-form-label pr-0">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="maleRadio" value="L" required <?php echo ($penduduk->jenis_kelamin == 'L') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="maleRadio">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="femaleRadio" value="P" required <?php echo ($penduduk->jenis_kelamin == 'P') ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="femaleRadio">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="pekerjaan" class="col-sm-3 col-form-label pr-0">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required value="<?php echo ucwords($penduduk->pekerjaan); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select name="agama" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Islam" <?php echo ($penduduk->agama == "Islam") ? 'selected' : ''; ?>>Islam</option>
                                                <option value="Kristen" <?php echo ($penduduk->agama == "Kristen") ? 'selected' : ''; ?>>Kristen</option>
                                                <option value="Katholik" <?php echo ($penduduk->agama == "Katholik") ? 'selected' : ''; ?>>Katholik</option>
                                                <option value="Hindu" <?php echo ($penduduk->agama == "Hindu") ? 'selected' : ''; ?>>Hindu</option>
                                                <option value="Budha" <?php echo ($penduduk->agama == "Budha") ? 'selected' : ''; ?>>Budha</option>
                                                <option value="Konghucu" <?php echo ($penduduk->agama == "Konghucu") ? 'selected' : ''; ?>>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="alamat" class="col-sm-3 col-form-label pr-0">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea name="alamat" id="alamat" class="form-control" required style="width: 100%;"><?php echo ucwords( $penduduk->alamat); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="no_telp" class="col-sm-3 col-form-label pr-0">Nomor Telfon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" required value="<?php echo ucwords($penduduk->no_telp); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" autofocus>
                                            <!-- Tambahkan input tersembunyi untuk menyimpan nama gambar yang sudah ada -->
                                            <input type="hidden" name="gambar_lama" value="<?php echo $penduduk->gambar; ?>">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="<?php echo base_url('assets/foto_penduduk/' . $penduduk->gambar);?>" alt="gambar" class="img-fluid" style="max-width: 100%; height: auto;">
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
