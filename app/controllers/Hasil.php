<?php

class Hasil extends Controller
{
    public function index()
    {
        // Mengambil data siswa, nilai minimum, dan maksimum
        $data['siswa'] = $this->model('Siswa_model')->getSiswa();
        $data['minValues'] = $this->model('Siswa_model')->getSiswaValue('min');
        $data['maxValues'] = $this->model('Siswa_model')->getSiswaValue('max');
        $data['kriteria'] = $this->model('Kriteria_model')->getKriteria();

        // Bobot untuk masing-masing kriteria
        $kriteria = $this->model('Kriteria_model')->getKriteria();
        $arrayBobot = array_column($kriteria, 'bobot');

        $siswaData = []; // Array untuk menyimpan hasil siswa

        // Menghitung normalisasi dan kategori untuk setiap siswa
        foreach ($data['siswa'] as $dataSiswa) {
            $hasil = 0;

            for ($i = 1; $i <= 5; $i++) {
                $k = "k$i"; // Nama kolom kriteria
                $hasil += $this->model('Siswa_model')->normalize($dataSiswa[$k], $data['minValues']["minK$i"], $data['maxValues']["maxK$i"], $arrayBobot[$i - 1]);
            }

            // Tentukan kategori berdasarkan hasil normalisasi
            $ket = ($hasil <= 50) ? "Tidak Bagus" : "Bagus";
            $this->model('Hasil_model')->saveHasil($dataSiswa['id_siswa'], $hasil, $ket);

            // Simpan hasil untuk ditampilkan di view
            $siswaData[] = [
                'id_siswa' => $dataSiswa['id_siswa'],
                'nama_siswa' => $dataSiswa['nama_siswa'], // Pastikan kolom ini ada di tabel
                'kelas' => $dataSiswa['kelas'], // Pastikan kolom ini ada di tabel
                'k1' => $dataSiswa['k1'],
                'k2' => $dataSiswa['k2'],
                'k3' => $dataSiswa['k3'],
                'k4' => $dataSiswa['k4'],
                'k5' => $dataSiswa['k5'],
                'hasil' => $hasil,
                'kategori' => $ket
            ];
        }

        // Menyimpan hasil ke dalam data untuk tampilan
        $data['siswaData'] = $siswaData;
        $data['judul'] = "Data Siswa";

        // Menampilkan tampilan
        $this->view('template/header', $data);
        $this->view('hasil/index', $data);
        $this->view('template/footer');
    }
}
