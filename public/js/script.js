$(function () {
    $('.add_siswa').on('click', function () {
        $('#formModalLabel').html('Tambah Data Siswa');
        $('.tmbl').html('Tambah Data')
    });
    $('.ubh_siswa').on('click', function () {
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.tmbl').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/smart/public/siswa/ubah')



        // ambil data dari form
        const id_siswa = $(this).data('id_siswa');

        $.ajax({
            url: 'http://localhost/smart/public/siswa/getUbah',
            data: { id_siswa: id_siswa },
            method: 'post',
            dataType: 'JSON',
            success: function (data) {
                // menambahkan logika untuk menampilkan data di UI
                $('#nama_siswa').val(data.nama_siswa);
                $('#kelas').val(data.kelas);
                $('#k1').val(data.k1);
                $('#k2').val(data.k2);
                $('#k3').val(data.k3);
                $('#k4').val(data.k4);
                $('#k5').val(data.k5);
                $('#id_siswa').val(data.id_siswa);
            }
        });
    });

    $('.add_kriteria').on('click', function () {
        $('#formModalLabel').html('Tambah Data Kriteria');
        $('.tmbl').html('Tambah Data')
    });
    $('.ubh_kriteria').on('click', function () {
        $('#formModalLabel').html('Ubah Data Kriteria');
        $('.tmbl').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/smart/public/kriteria/ubah')


        // ambil data dari form
        const id_kriteria = $(this).data('id_kriteria');

        $.ajax({
            url: 'http://localhost/smart/public/kriteria/getUbah',
            data: { id_kriteria: id_kriteria },
            method: 'post',
            dataType: 'JSON',
            success: function (data) {
                // menambahkan logika untuk menampilkan data di UI
                $('#kriteria').val(data.nama_kriteria);
                $('#bobot').val(data.bobot);
                $('#id_kriteria').val(data.id_kriteria);
            }
        });
    });
});