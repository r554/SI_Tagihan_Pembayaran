<script src="<?= base_url() ?>assets/dist/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/ripple.js"></script>
<script src="<?= base_url() ?>assets/dist/assets/js/pcoded.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/dist/assets/js/menu-setting.min.js"></script> -->

<!-- Apex Chart -->
<script src="<?= base_url() ?>assets/dist/assets/js/plugins/apexcharts.min.js"></script>
<!-- custom-chart js -->
<script src="<?= base_url() ?>assets/dist/assets/js/pages/dashboard-main.js"></script>
<script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function() {
        setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
    });

    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
        $.ajax({
            url: '<?= base_url() ?>/assets/ajax_timestamp.php',
            success: function(data) {
                $('#timestamp').html(data);
            },
        });
    }
</script>