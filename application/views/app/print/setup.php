<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active"></li>
          </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-3">
          <div class="form-group">
            <!-- <a href="#!" class="btn btn-primary float-right">TAMBAH DATA</a> -->
          </div>
        </div>
        <div class="col-9 mx-auto">
          <div class="card">
            <div class="card-header">
              <h3>Cetak Laporan</h3>
            </div>
            <div class="card-body">
              <form action="<?= base_url("print/setup") ?>" method="post">
                <div class="form-group">
                  <label for="jenis_laporan">Jenis Laporan</label>
                  <select name="jenis_laporan" id="jenis_laporan" class="form-control">
                    <option value="">- PILIH KATEGORI -</option>
                    <option value="produk">LAPORAN PRODUK</option>
                    <option value="cabang">LAPORAN CABANG</option>
                    <option value="tramsaksi">LAPORAN TRANSAKSI</option>
                    <option value="sewa">LAPORAN SEWA KELUAR</option>
                    <option value="masuk">LAPORAN SEWA KEMBALI</option>
                  </select>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">CETAK LAPORAN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Modal -->
<div class="modal fade" id="hapusModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('katalog/delete') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="id-delete">
          <p>
            Apakah anda yakin ingin menghapus data ini ?
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const hapusData = (target) => {
    const id = target.getAttribute("data-id");

    document.getElementById("id-delete").value = id;
  }
</script>