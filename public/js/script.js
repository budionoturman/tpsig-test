$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Wisata');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click',function()  {
        
        $('#formModalLabel').html('Ubah Data Wisata');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/tpsig/public/wisata/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/tpsig/public/wisata/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#lokasi').val(data.lokasi);
                $('#lat').val(data.lat);
                $('#lng').val(data.lng);
                $('#id').val(data.id);
            }
        });
    });

});