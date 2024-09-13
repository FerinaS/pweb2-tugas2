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