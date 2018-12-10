$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('Teknik Informatika');

    });

    $('.tampilModalEdit').on('click', function () {
        const id = $(this).data('id');
        const baseurl = $(this).data('baseurl');

        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', baseurl + '/mahasiswa/edit') //attr atribut

        $.ajax({
            url: baseurl + "/mahasiswa/getEdit",
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

});