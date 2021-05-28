<div class="container-fluid">
  <h3 class="text-dark mb-4">Team</h3>
  <div class="card shadow">
    <div class="card-header py-3">
      <p class="text-primary m-0 font-weight-bold">Employee Info</p>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 text-nowrap">
          <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                <option value="10" selected="">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>&nbsp;</label></div>
        </div>
        <div class="col-md-6">
          <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
        </div>
      </div>
      <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once("conn.php");
            $no = 0;
            $kon = koneksi();
            $link = 'SELECT * FROM tbl_transaksi ORDER BY idTransakai ASC';
            $query = mysqli_query($kon, $link);
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td><?php echo $no = $no + 1; ?></td>
                <td><?php echo $row['NamaMuzakki']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['hp']; ?></td>
                <td>
                  <a href="index.php?page=ubah_pelanggan&id=<?= $row['idTransakai']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="javascript:hapus(<?= $row['idTransakai']; ?>)" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            tutupkoneksi($kon);
            ?>
          </tbody>
          <tfoot>
            <tr>
              <td><strong>Name</strong></td>
              <td><strong>Position</strong></td>
              <td><strong>Office</strong></td>
              <td><strong>Age</strong></td>
              <td><strong>Start date</strong></td>
              <td><strong>Salary</strong></td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="row">
        <div class="col-md-6 align-self-center">
          <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
        </div>
        <div class="col-md-6">
          <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
              <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
              <li class="page-item active"><a class="page-link" href="table.php?page=1">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<footer class="bg-white sticky-footer">
  <div class="container my-auto">
    <div class="text-center my-auto copyright"><span>Copyright © Brand 2021</span></div>
  </div>
</footer>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>