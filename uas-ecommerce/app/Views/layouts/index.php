<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS PEMORGRAMAN WEB</title>

    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet">

    <!-- Javascript -->
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/inspinia.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js'); ?>"></script>

</head>

<body>
    <?= $this->renderSection('content') ?>
</body>


<script>
    $(document).ready(function() {

        // Fungsi untuk handle check all
        $("#check_all").click(function() {
            $('input:checkbox').attr('checked', 'false');
        });

        // Fungsi untuk handle uncheck all
        $("#uncheck_all").click(function() {
            $('input:checkbox').removeAttr('checked');
        });

        // Fungsi-fungsi baru dapat ditambahkan disini   

        // Fungsi Delete all (checked)
        $("#delete_all").click(function() {
            // Validasi jika tidak ada checkbox yang dicentang
            if ($('input[name=product]:checked').length === 0) {
                alert('Silahkan pilih salah satu data yang akan dihapus!');
                return false;
            } else {
                // Konfirmasi dulu ketika data mau dihapus
                if (confirm("Apakah kamu yakin mau menghapus data?")) {
                    // Ambil value checkbox yang dicentang dan masukan ke dalam array
                    let getValCheckbox = [];
                    $('input[name=product]:checked').map(function() {
                        getValCheckbox.push($(this).val());
                    });

                    // Kirim request melalui ajax
                    $.ajax({
                        url: 'product_delete_all.php',
                        type: 'POST',
                        data: {
                            id: getValCheckbox,
                        },
                        dataType: 'json',
                        success: function(result) {
                            if (result.success == true) {
                                alert(result.message);
                                location.reload();
                            } else {
                                alert('Gagal menghapus data');
                                location.reload();
                            }
                        }
                    });
                }
            }
        });

        function productChangeActiveAll(msgAlert, msgConfirm, type) {
            // Validasi jika tidak ada checkbox yang dicentang
            if ($('input[name=product]:checked').length === 0) {
                alert(msgAlert);
                return false;
            } else {
                // Konfirmasi dulu ketika data mau dihapus
                if (confirm(msgConfirm)) {
                    // Ambil value checkbox yang dicentang dan masukan ke dalam array
                    let getValCheckbox = [];
                    $('input[name=product]:checked').map(function() {
                        getValCheckbox.push($(this).val());
                    });

                    // Kirim request melalui ajax
                    $.ajax({
                        url: 'product_change_active_all.php',
                        type: 'POST',
                        data: {
                            type: type,
                            id: getValCheckbox,
                        },
                        dataType: 'json',
                        success: function(result) {
                            if (result.success == true) {
                                alert(result.message);
                                location.reload();
                            } else {
                                alert('Gagal mengupdate data');
                                location.reload();
                            }
                        }
                    });
                }
            }
        }

        // Fungsi Make status “active” (checked)
        $("#active_all").click(function() {
            productChangeActiveAll('Silahkan pilih salah satu data yang akan diactivekan!', 'Apakah kamu yakin mau meng-activekan data?', 'active_all');
        });

        // Fungsi Make status “not active” (checked)
        $("#notactive_all").click(function() {
            productChangeActiveAll('Silahkan pilih salah satu data yang akan dinotactivekan!', 'Apakah kamu yakin mau me-nonactivekan data?', 'nonactive_all');
        });
    });
</script>

</html>