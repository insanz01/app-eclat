<style>
  .text-oren {
    color: orange;
  }
</style>

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Hasil Eclat</h1>
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
              <table class="table table-hovered">
                <thead>
                  <th>Asosiasi</th>
                  <th>Skor</th>
                </thead>
                <tbody id="show-table">
                  <tr>
                    <td class="text-center" colspan="2">Kosong</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  const loadData = async () => {
    return await axios.get(`http://localhost:5000/eclat`).then(res => res.data);
  }

  const drawTable = (data) => {
    let temp = ``;

    data.forEach(res => {
      console.log(res[0]);
      const asosiasi = res[0];
      let textColor = "text-success";

      if(res[1] < 0.30) {
        textColor = "text-danger";
      } else if(res[1] < 0.65) {
        textColor = "text-oren";
      }

      temp += `<tr>
                <td>
                  <span class='${textColor}'>${asosiasi[0]}</span> dan <span class='${textColor}'>${asosiasi[1]}</span>
                </td>
                <td>${(res[1] * 100).toFixed(2)} %</td>
              </tr>`;
    });

    document.getElementById('show-table').innerHTML = temp;
  }

  const showData = async () => {
    const result = await loadData().then(res => res);

    console.log(result);
    if(result) {
      drawTable(result);
    }
  }

  window.addEventListener('load', () => {
    showData();
  })
</script>