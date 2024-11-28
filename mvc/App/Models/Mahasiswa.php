<?php
class Mahasiswa {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllMahasiswa() {
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function addMahasiswa($nama, $nim, $prodi, $jurusan) {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nama, nim, prodi, jurusan) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $nim, $prodi, $jurusan);
        return $stmt->execute();
    }

    public function deleteMahasiswa($id) {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function updateMahasiswa($id, $nama, $nim, $prodi, $jurusan) {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ?, prodi = ?, jurusan = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $nama, $nim, $prodi, $jurusan, $id);
        return $stmt->execute();
    }

    public function getMahasiswaById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
