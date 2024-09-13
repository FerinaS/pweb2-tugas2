<?php
// Include the database classes
include 'koneksi.php'; // Adjust this path as necessary

// Initialize the lecturers class and fetch data
$lecturers = new lecturers();
$lecturersData = $lecturers->tampilkanData();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Lecturers</title>
    <style>
      body {
        background-color: #f8f9fa;
      }
      .card {
        margin-top: 20px;
      }
      .card-header {
        background-color: #6f4f28; /* Brown color */
        color: white;
      }
      .table thead th {
        background-color: #6f4f28; /* Brown color */
        color: white;
        text-align: center;
      }
      .table tbody td {
        text-align: center;
      }
      .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5em 1em;
        margin: 0.2em;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              LECTURERS
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="myTable">
                  <thead>
                    <tr>
                      //tabel untuk data kelas
                      <th scope="col">NO.</th>
                      <th scope="col">ID</th>
                      <th scope="col">NAME</th>
                      <th scope="col">PHONE NUMBER</th>
                      <th scope="col">ADDRESS</th>
                      <th scope="col">NIDN</th>
                      <th scope="col">NIP</th>
                      <th scope="col">USER_ID</th>
                      <th scope="col">DELETE_AT</th>
                      <th scope="col">CREATED_AT</th>
                      <th scope="col">UPDATE_AT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($lecturersData as $row) {
                    ?>
                    <tr>
                        //tampilkan data 
                        <td><?php echo $no++ ?></td>
                        <td><?php echo htmlspecialchars($row['id']) ?></td>
                        <td><?php echo htmlspecialchars($row['name']) ?></td>
                        <td><?php echo htmlspecialchars($row['number_phone']) ?></td>
                        <td><?php echo htmlspecialchars($row['address']) ?></td>
                        <td><?php echo htmlspecialchars($row['nidn']) ?></td>
                        <td><?php echo htmlspecialchars($row['nip']) ?></td>
                        <td><?php echo htmlspecialchars($row['user_id']) ?></td>
                        <td><?php echo htmlspecialchars($row['delete_at']) ?></td>
                        <td><?php echo htmlspecialchars($row['created_at']) ?></td>
                        <td><?php echo htmlspecialchars($row['update_at']) ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#myTable').DataTable({
              "paging": true,
              "searching": true,
              "info": true
          });
      });
    </script>
  </body>
</html>
