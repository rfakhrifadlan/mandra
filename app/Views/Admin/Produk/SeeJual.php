<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">List Jual Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">List Jual Produk</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Jual Produk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <?php if (session()->getFlashdata('msg')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"></span>
                    <span class="alert-text"><strong><?= session()->getFlashdata('msg') ?></strong></span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                <?php endif; ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Jual</th>
                        <th>Banyak</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0; ?>
                      <?php if ($produk): ?>
                        <?php foreach($produk as $data): ?>
                          <tr>
                            <td><?= $no+=1 ?></td>
                            <td><?= $data['nama_produk']; ?></td>
                            <td><?= $data['tanggal_jual']; ?></td>
                            <td><?= $data['stock']; ?></td>
                            <td>
                              <a href="<?= base_url('AdminController/EditJual/'.$data['id_jual']) ?>" class="btn btn-info">EDIT</a>
                              <a href="<?= base_url('AdminController/HapusJual/'.$data['id_jual']) ?>" class="btn btn-danger">HAPUS</a>
                            </td>
                          </tr>
                        <?php endforeach;?>
                      <?php endif;?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
</body>
