<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Penghuni</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('Penghuni/createPenghuni'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label pr-0">NIK dan Nama Penduduk</label>
                                <div class="col-sm-5">
                                    <select name="id_penduduk" class="form-control" id="nama" required>
                                        <?php foreach ($penghuni as $data): ?>
                                            <option value="<?php echo $data->id_penduduk; ?>">
                                                <?php echo $data->nik; ?> - <?php echo $data->nama_lengkap; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="blok" class="col-sm-2 col-form-label pr-0">Blok</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="blok" name="blok" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="nomor" class="col-sm-2 col-form-label pr-0">Nomor Rumah</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nomor" name="nomor" required>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="status" class="col-sm-2 col-form-label pr-0">Status Hunian</label>
                                <div class="col-sm-5">
                                    <select name="status_hunian" class="form-control" required id="status">
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Tetap" name="Tetap">Tetap</option>
                                        <option value="Kontrak" name="Kontrak">Kontrak</option>
                                    </select>
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
