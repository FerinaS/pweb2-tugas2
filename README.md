# pweb2-tugas2

## About Me
###  Nama    :  Ferina Sheren Nurlita Anggraeni
###  Kelas   : TI-2B
###  NIM     : 230302036

### ERD
<img width="413" alt="image" src="https://github.com/user-attachments/assets/9f45922c-5e0a-4d4b-963a-aeab140fe8da">

### 1. Buat Membuat View berbasis OOP, dengan mengambil data dari database MySQL
~~~ php
<?php
// membuat kelas database
class database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pweb2";
    protected $koneksi; // Properti koneksi

    //membuat koneksi untuk koneksi ke database
    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db);

        //untuk cek koneksi berhasil atau tidak nya
        if ($this->koneksi->connect_error) {
            die("Koneksi Gagal: " . $this->koneksi->connect_error);
        } else {
        }
    }
}
// buat class turunan dari class database
class lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        return $array;
        }
    }
}
//buat class turunan dari class database
class course_lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM course_lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return $array;
    }
}
//buat class turunan dari class database
class lecturersJKB extends lecturers {
    public function tampilkanData() {
        $query = "SELECT * FROM lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return $array;
    }
}


?>
~~~

### 2. Menggunakan _construct sebagai tautan ke database
#### konstruktor ini akan di panggil secara otomatis untuk menganalisasi nilai atribut dari objek tersebut saat membuat objek baru dari kelas database
~~~ php

//membuat koneksi untuk koneksi ke database
    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db);

        //untuk cek koneksi berhasil atau tidak nya
        if ($this->koneksi->connect_error) {
            die("Koneksi Gagal: " . $this->koneksi->connect_error);
        } else {
        }
~~~

### 3. Menerapkan enkapsulasi sesuai dengan logika studi kasus
### Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
~~~ php
<?php
// membuat kelas database
class database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pweb2";
    protected $koneksi; // Properti koneksi

    //membuat koneksi untuk koneksi ke database
    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->user, $this->pass, $this->db);
~~~

### 4. Membuat kelas turunan menggunakan konsep Inheritance
####  Kelas dapat mewarisi properti dan metode dari kelas lain.
~~~ php
// buat class turunan dari class database
class lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        return $array;
        }
    }
}
//buat class turunan dari class database
class course_lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM course_lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return $array;
    }
~~~

### 5. Menerapkan polimorfisme untuk setidaknya 2 role sesuai dengan studi kasus
#### Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
~~~ php
// buat class turunan dari class database
class lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        return $array;
        }
    }
}
//buat class turunan dari class database
class course_lecturers extends database {
    public function tampilkanData() {
        $query = "SELECT * FROM course_lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return $array;
    }
}
//buat class turunan dari class database
class lecturersJKB extends lecturers {
    public function tampilkanData() {
        $query = "SELECT * FROM lecturers";
        $result = $this->koneksi->query($query); // Gunakan $this->koneksi
        $array = array();
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $array[] = $row;
            }
        }
        return $array;
    }
~~~

### Output tampilan semua data daru table Lecturers

![Screenshot 2024-09-14 043435](https://github.com/user-attachments/assets/0a6ef9ae-f946-4ce8-bbde-aaa167cdc08b)

### Output tampilan semua data daru table Course_Lecturers
![Screenshot 2024-09-14 043555](https://github.com/user-attachments/assets/7baa2ec4-c4fd-4984-91bd-78a67ad4b49a)

### Tampilan dari code index.php
~~~ php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5dc; /* Warna background menjadi cokelat muda */
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #8b4513; /* Warna navbar cokelat tua */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-logo {
            font-size: 24px;
            color: white;
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            transition: color 0.3s, background 0.3s;
            border-radius: 30px;
        }

        .navbar a:hover {
            background-color: #d2b48c; /* Warna hover menjadi cokelat muda */
            color: white;
        }

        .navbar a.active {
            background-color: #d2b48c; /* Warna link aktif menjadi cokelat muda */
            color: white;
        }

        /* Content styling */
        .content {
            text-align: center;
            padding: 50px;
            background-color: #fff8dc; /* Background konten menjadi cokelat sangat muda */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 30px 10%;
            border-radius: 15px;
        }

        h1 {
            color: #8b4513; /* Warna teks utama cokelat tua */
            font-size: 42px;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.5;
        }

        /* Button styling */
        .button {
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: white;
            background-color: #8b4513; /* Warna tombol cokelat tua */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 10px;
            display: inline-block;
        }

        .button:hover {
            background-color: #d2b48c; /* Warna hover tombol menjadi cokelat muda */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-logo">LECTURERS</div>
    </div>

    <!-- Main content -->
    <div class="content">
        <h3>Nama : Ferina Sheren N.A</h3>
        <h3>Kelas : TI-2B</h3>
        <h3>NIM : 230302036</h3>
        <p>LECTURERS AND COURSE_LECTURERS.</p>

        <a href="tampil.php?ALL" class="button">Tampilan Lecturers</a>
        <a href="tampil-lagi.php?ALL" class="button">Tampilan course_lecturers</a>
      
    </div>

</body>
</html>
~~~

### Tampilan dari code tampil.php
~~~ php
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
                        <!--tabel untuk data kelas -->
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
                        <!-- tampilkan data -->
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
~~~

### Tampilan dari code tampil-lagi.php
~~~ php
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
~~~

### DATABASE
![Screenshot 2024-09-14 044517](https://github.com/user-attachments/assets/67a442d5-223a-47dc-9d9f-a9057d6b439a)

### Course_Lecturers
![Screenshot 2024-09-14 044647](https://github.com/user-attachments/assets/73b0d348-d53f-4be4-8632-82f9a22f39c7)

### Lecturers
![Screenshot 2024-09-14 044628](https://github.com/user-attachments/assets/1df97889-b967-4b89-84ce-9121629fb3ea)

## Authors
### Ferina Sheren N.A

