<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Butiq Lily - SELL 100% AUTHENTIC</title>
        <link rel="icon" href="https://i.ibb.co/w0S9L9r/butiq-lily.jpg" type="image/gif" sizes="16x16">
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url();?>/resources/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url();?>/resources/css/shop-homepage.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation -->
        <?php $this->load->view('navigation');?>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <?php $this->load->view($content);?>
            </div> 
        </div> <!-- /.container -->
        <br>
        
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Adinegoro <?= date("Y"); ?></p>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?= base_url();?>/resources/js/jquery.min.js"></script>
        <script src="<?= base_url();?>/resources/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
