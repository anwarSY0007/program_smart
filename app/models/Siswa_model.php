<?php

class Siswa_model{
    private $siswa = [
        [
            'nama' => 'Aisha',
            'nis' => '210001',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Melati No. 1',
            'wali_murid' => 'Budi',
            'nomor_hp' => '081234567890'
        ],
        [
            'nama' => 'Budi',
            'nis' => '210002',
            'kelas' => 'TK B',
            'alamat' => 'Jl. Mawar No. 2',
            'wali_murid' => 'Siti',
            'nomor_hp' => '081234567891'
        ],
        [
            'nama' => 'Citra',
            'nis' => '210003',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kenanga No. 3',
            'wali_murid' => 'Agus',
            'nomor_hp' => '081234567892'
        ],
        [
            'nama' => 'Dani',
            'nis' => '210004',
            'kelas' => 'TK C',
            'alamat' => 'Jl. Anggrek No. 4',
            'wali_murid' => 'Dewi',
            'nomor_hp' => '081234567893'
        ],
        [
            'nama' => 'Eka',
            'nis' => '210005',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kamboja No. 5',
            'wali_murid' => 'Rudi',
            'nomor_hp' => '081234567894'
        ],
        [
            'nama' => 'Fajar',
            'nis' => '210005',
            'kelas' => 'TK B',
            'alamat' => 'Jl. Cempaka No. 6',
            'wali_murid' => 'Lina',
            'nomor_hp' => '081234567895'
        ],
        [
            'nama' => 'Gita',
            'nis' => '210005',
            'kelas' => 'TK C',
            'alamat' => 'Jl. Flamboyan No. 7',
            'wali_murid' => 'Hendra',
            'nomor_hp' => '081234567896'
        ],
        [
            'nama' => 'Hana',
            'nis' => '210006',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Teratai No. 8',
            'wali_murid' => 'Yani',
            'nomor_hp' => '081234567897'
        ],
        [
            'nama' => 'Iwan',
            'nis' => '210007',
            'kelas' => 'TK B',
            'alamat' => 'Jl. Puspa No. 9',
            'wali_murid' => 'Joko',
            'nomor_hp' => '081234567898'
        ],
        [
            'nama' => 'Joko',
            'nis' => '210008',
            'kelas' => 'TK C',
            'alamat' => 'Jl. Bunga No. 10',
            'wali_murid' => 'Tina',
            'nomor_hp' => '081234567899'
        ],
        [
            'nama' => 'Kirana',
            'nis' => '210009',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Melati No. 11',
            'wali_murid' => 'Andi',
            'nomor_hp' => '081234567900'
        ],
        [
            'nama' => 'Lina',
            'nis' => '210010',
            'kelas' => 'TK B',
            'alamat' => 'Jl. Mawar No. 12',
            'wali_murid' => 'Sari',
            'nomor_hp' => '081234567901'
        ],
        [
            'nama' => 'Maya',
            'nis' => '210011',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kenanga No. 13',
            'wali_murid' => 'Eka',
            'nomor_hp' => '081234567902'
        ],
        [
            'nama' => 'Nina',
            'nis' => '210012',
            'kelas' => 'TK C',
            'alamat' => 'Jl. Anggrek No. 14',
            'wali_murid' => 'Fajar',
            'nomor_hp' => '081234567903'
        ],
        [
            'nama' => 'Omar',
            'nis' => '210013',
            'kelas' => 'TK A',
            'alamat' => 'Jl. Kamboja No. 15',
            'wali_murid' => 'Gita',
            'nomor_hp' => '081234567904'
        ],

    ];
    public function getSiswa()
    {
        return $this->siswa;
    }
}