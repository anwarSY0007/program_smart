<?php

class Siswa extends Controller
{
  public function index()
  {
    $data['siswa'] = $this->model('Siswa_model')->getSiswa();
    $data['kriteria'] = $this->model('Kriteria_model')->getKriteria();
    $data['judul'] = "Data Siswa";
    $this->view('template/header', $data);
    $this->view('siswa/index', $data);
    $this->view('template/footer');
  }

  public function tambah()
  {
    if ($this->model('Siswa_model')->addSiswa($_POST) > 0) {
      # jika data masuk mk pindahkan ke halaman kirteria
      Flasher::setFlash('berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Siswa_model')->hapusKriteria($id) > 0) {
      # jika data masuk mk pindahkan ke halaman kirteria
      Flasher::setFlash('berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Siswa_model')->getDataById($_POST['id_siswa']));
  }

  public function ubah(){
    if ($this->model('Siswa_model')->ubahsiswa($_POST) > 0) {
      # jika data masuk mk pindahkan ke halaman kirteria
      Flasher::setFlash('berhasil', 'success', 'diubah');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'danger', 'diubah');
      header('Location: ' . BASEURL . '/siswa');
      exit;
    }
  }
}
