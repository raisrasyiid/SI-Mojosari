<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Penghuni</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url('Penghuni/editPenghuni'); ?>" method="POST" enctype="multipart/form-data">
                        <?php if ($penghuni !== null && isset($penghuni->id_penghuni)) : ?>
                            <input type="hidden" name="id_penghuni" value="<?php echo $penghuni->id_penghuni; ?>">
                        <?php endif; ?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group row mb-3">
                                        <label for="nik" class="col-sm-3 col-form-label pr-0">NIK dan Nama Penduduk</label>
                                        <div class="col-sm-9">
                                            <select name="id_penduduk" class="form-control" id="nama" required>
                                                <?php foreach ($penduduk as $data): ?>
                                                    <option value="<?php echo $data->id_penduduk; ?>" <?php echo ($data->id_penduduk == $penghuni->id_penduduk) ? 'selected' : ''; ?>>
                                                        <?php echo $data->nik; ?> - <?php echo $data->nama_lengkap; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="blok" class="col-sm-3 col-form-label pr-0">Blok Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="blok" name="blok" required value="<?php echo ucwords($penghuni->blok);?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="nomor" class="col-sm-3 col-form-label pr-0">Nomor Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nomor" name="nomor" required value="<?php echo ucwords($penghuni->nomor); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="status" class="col-sm-3 col-form-label pr-0">Status Hunian</label>
                                        <div class="col-sm-5">
                                            <select name="status_hunian" class="form-control" required id="status">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Tetap" <?php echo ($penghuni->status_hunian == "Tetap") ? 'selected' : ''; ?>>Tetap</option>
                                                <option value="Kontrak" <?php echo ($penghuni->status_hunian == "Kontrak") ? 'selected' : ''; ?>>Kontrak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" autofocus>
                                            <!-- Tambahkan input tersembunyi untuk menyimpan nama gambar yang sudah ada -->
                                            <input type="hidden" name="gambar_lama" value="<?php echo $penghuni->gambar; ?>">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="<?php echo base_url('assets/foto_penghuni/' . $penghuni->gambar);?>" alt="gambar" class="img-fluid" style="max-width: 100%; height: auto;">
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
