<?php
require_once 'App/Models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct($conn) {
        $this->model = new Mahasiswa($conn);
    }

    public function index() {
        $data = $this->model->getAllMahasiswa();
        require_once 'App/Views/mahasiswa_view.php';
    }

    public function add() {
        if (isset($_POST['nama_form'], $_POST['nim_form'], $_POST['prodi_form'], $_POST['jurusan_form'])) {
            $nama = trim($_POST['nama_form']);
            $nim = trim($_POST['nim_form']);
            $prodi = trim($_POST['prodi_form']);
            $jurusan = trim($_POST['jurusan_form']);

            if (empty($nama) || empty($nim) || empty($prodi) || empty($jurusan)) {
                echo "Semua field harus diisi!";
                return;
            }

            $this->model->addMahasiswa($nama, $nim, $prodi, $jurusan);
            header("Location: index.php"); 
            exit;
        }
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama_form'];
            $nim = $_POST['nim_form'];
            $prodi = $_POST['prodi_form'];
            $jurusan = $_POST['jurusan_form'];

            $this->model->updateMahasiswa($id, $nama, $nim, $prodi, $jurusan);

            header("Location: index.php");
            exit;
        } else {
            $data = $this->model->getMahasiswaById($id);

            if (!$data) {
                echo "Mahasiswa dengan ID $id tidak ditemukan.";
                exit;
            }

            require_once 'App/Views/update_view.php';
        }
    }

    public function delete($id) {
        $this->model->deleteMahasiswa($id);
        header("Location: index.php");
        exit;
    }
}
