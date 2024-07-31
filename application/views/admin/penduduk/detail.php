<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Data Penduduk</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <input type="hidden" name="id_penduduk" value="<?php echo $penduduk->id_penduduk; ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row mb-3">
                                        <label for="nik" class="col-sm-3 col-form-label pr-0">NIK</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="nik" name="nik" required value="<?php echo ucwords($penduduk->nik); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="nama_lengkap" class="col-sm-3 col-form-label pr-0">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required value="<?php echo ucwords($penduduk->nama_lengkap); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-sm-3 col-form-label pr-0">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required value="<?php echo ucwords($penduduk->jenis_kelamin); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="tempat_lahir" class="col-sm-3 col-form-label pr-0">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required value="<?php echo ucwords($penduduk->tempat_lahir); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="tgl_lahir" class="col-sm-3 col-form-label pr-0">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input disabled type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?php echo $penduduk->tgl_lahir; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="pekerjaan" class="col-sm-3 col-form-label pr-0">Pekerjaan</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="pekerjaan" name="pekerjaan" required value="<?php echo ucwords($penduduk->pekerjaan); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="agama" name="agama" required value="<?php echo ucwords($penduduk->agama); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="alamat" class="col-sm-3 col-form-label pr-0">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea disabled name="alamat" id="alamat" class="form-control" required><?php echo ucwords( $penduduk->alamat); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="no_telp" class="col-sm-3 col-form-label pr-0">Nomor Telfon</label>
                                        <div class="col-sm-9">
                                            <input disabled type="text" class="form-control" id="no_telp" name="no_telp" required value="<?php echo ucwords($penduduk->no_telp); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-danger float-left ml-2" onclick="window.history.back()">Kembali</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="<?php echo base_url('assets/foto_penduduk/' . $penduduk->gambar);?>" alt="gambar" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
