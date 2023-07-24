// $(<sesuatu>) -> $ adalah jQuery
// Ketika document ready, maka jalankan block code di dalam
$(document).ready(() => {
    // Hilangkan tombol cari
    $('#tombol-pencarian').hide();

    // Event ketika keyword ditulis
    $('#keyword').on('keyup', () => {
        // Munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/students.php?keyword=' + $('#keyword').val());

        // menggunakan $.get() lebih fleksibel karena bisa tambah pekerjaan lain
        $.get('ajax/students.php?keyword=' + $('#keyword').val(), (data) => {
            $('#container').html(data);
            $('.loader').hide();
        })

    })
});