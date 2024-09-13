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
