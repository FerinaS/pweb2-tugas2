<?php
// Include the database classes
include 'koneksi.php'; // Adjust this path as necessary

// Initialize the course_lecturers class and fetch data
$courseLecturers = new course_lecturers();
$courseLecturersData = $courseLecturers->tampilkanData();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Course Lecturers</title>
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
              COURSE LECTURERS
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="myTable">
                  <thead>
                    <tr>
                    <!--tabel untuk data kelas -->
                      <th scope="col">NO.</th>
                      <th scope="col">ID</th>
                      <th scope="col">LECTURER_ID</th>
                      <th scope="col">COURSE_ID</th>
                      <th scope="col">DELETED_AT</th>
                      <th scope="col">CREATED_AT</th>
                      <th scope="col">UPDATED_AT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($courseLecturersData as $row) {
                    ?>
                    <tr>
                        <!--tampilkan data -->
                        <td><?php echo $no++ ?></td>
                        <td><?php echo htmlspecialchars($row['id']) ?></td>
                        <td><?php echo htmlspecialchars($row['lecturer_id']) ?></td>
                        <td><?php echo htmlspecialchars($row['course_id']) ?></td>
                        <td><?php echo htmlspecialchars($row['deleted_at']) ?></td>
                        <td><?php echo htmlspecialchars($row['created_at']) ?></td>
                        <td><?php echo htmlspecialchars($row['updated_at']) ?></td>
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
