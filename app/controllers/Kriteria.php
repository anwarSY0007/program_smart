<?php

class Kriteria extends Controller
{
  public function index()
  {
    $data['kriteria'] = $this->model('Kriteria_model')->getKriteria();
    $data['judul'] = 'Data Kriteria';
    $this->view('template/header', $data);
    $this->view('kriteria/index', $data);
    $this->view('template/footer');
  }
  public function add()
  {
    if ($this->model('Kriteria_model')->addKriteria($_POST) > 0) {
      # jika data masuk mk pindahkan ke halaman kirteria
      Flasher::setFlash('berhasil', 'success', 'ditambah');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    } else {
      Flasher::setFlash('gagal', 'danger', 'ditambah');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Kriteria_model')->hapusKriteria($id) > 0) {
      Flasher::setFlash('berhasil', 'success', 'hapus', 'check');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    } else {
      Flasher::setFlash('gagal', 'danger', 'hapus', 'circle-xmark');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Kriteria_model')->getDataById($_POST['id_kriteria']));
  }

  public function ubah(){
    if ($this->model('Kriteria_model')->ubahKriteria($_POST) > 0) {
      # jika data masuk mk pindahkan ke halaman kirteria
      Flasher::setFlash('berhasil', 'success', 'diubah');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    } else {
      Flasher::setFlash('gagal', 'danger', 'diubah');
      header('Location: ' . BASEURL . '/kriteria');
      exit;
    }
  }
}
