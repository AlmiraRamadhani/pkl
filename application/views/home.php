<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AlmiraRamadhani">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />

    <title>Buletin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/css/sb-admin-2.min.css" rel="stylesheet">

    <noscript>
        <style>
            .es-carousel ul {
                display: block;
            }
        </style>
    </noscript>
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Begin Page Content -->
            <div class="container-fluid" align="center">
                <h3><?php echo anchor('buletin/profil', 'Profil'); ?></h3>
                <h5>Tahun 2017</h5>
                <?php echo anchor('buletin/buletin1', 'Edisi1'); ?><br>
                <?php echo anchor('buletin/buletin2', 'Edisi2'); ?><br>
                <?php echo anchor('buletin/buletin3', 'Edisi3'); ?><br>
                <br><br>
                <h5>Tahun 2018</h5>
                <?php echo anchor('buletin/buletin4', 'Edisi4'); ?><br>
                <?php echo anchor('buletin/buletin5', 'Edisi5'); ?><br>
                <?php echo anchor('buletin/buletin6', 'Edisi6'); ?>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>