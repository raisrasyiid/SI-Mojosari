<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Penduduk RT 11</h1>
          </div>
          <div class="row">
            <div class="col-12">
            <div class="card">
                  <div class="card-body">
                    <a href="<?= site_url('penduduk/addViewPenduduk');?>"class="btn btn-primary btn-sm mb-4"><i class="fas fa-plus"> Tambah</i></a>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Jenis Kelamin</th>
                            <th class="text-center">Nomor Telfon</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                            foreach ($penduduk as $val) { ?>
                                <tr style="text-align:center">
                                    <td class="text-center align-middle"><?php echo $no; ?></td>
                                    <td><img src="<?php echo base_url('assets/foto_penduduk/'.$val->gambar); ?>" width="100" alt="foto"></td></td>
                                    <td class="text-center align-middle"><?php echo ucwords($val->nama_lengkap); ?></td>
                                    <td class="text-center align-middle"><?php echo ucwords($val->jenis_kelamin); ?></td>
                                    <td class="text-center align-middle"><?php echo ucwords($val->no_telp); ?></td>
                                    <td class="text-center align-middle">
                                      <div class="btn-group">
                                        <a href="<?= site_url('penduduk/detail/' . (is_array($val) ? $val['nik'] : $val->nik)); ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="<?= site_url('penduduk/get_by_id/' . (is_array($val) ? $val['nik'] : $val->nik)); ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?= site_url('penduduk/delete/' . (is_array($val) ? $val['id_penduduk'] : $val->id_penduduk)); ?>" onclick="return confirm('Yakin Akan Menghapus Data ini? - Admin')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        
                                      </div>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
            </div>
          </div>
        </section>
      </div>