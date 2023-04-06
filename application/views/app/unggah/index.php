<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Unggah Dokumen</h1>
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
      <?php if($this->session->userdata("pesan")): ?>
        <div class="row">
          <div class="col-8 mx-auto text-center">
            <?= $this->session->userdata("pesan") ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-7 mx-auto">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url("panel/do_unggah") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="dokumen">Pilih Dokumen</label>
                  <input type="file" class="form-control" name="dokumen" id="dokumen">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">
                    UPLOAD DOKUMEN
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
