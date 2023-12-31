<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gagal Aktifasi Akun</title>

    <!-- Custom fonts for this templates --> 
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <!-- Content Wrapper --> 
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id= "content">
                
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <!-- 404 error text -->
                    <div class="text-center">
                        <?= $this->session->flashdata('pesan'); ?>
                        <a href="<?= base_url ('autentifikasi'); ?>" class="btn btn-secondary">&larr; Close</a>
                    </div>
                    </div>
                    <!-- /.container-fluid --> 
                
                </div>
                <!-- End of main content --> 

            </div>
            <!-- End of content wrapper-->
        </div>
        <!-- end of page wrapper -->

        <!-- Scroll to top button --> 
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

        <!-- Bootstrap core JS -->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min .js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!--core plugin JS--> 
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages --> 
        <script src="<?= base_url('asets/'); ?>js/sb-admin-2.min.js"></script>
        <script>
            $('.alert-message').alert().delay(3500).slideUp('slow'); 
        </script>
</body>
</html>