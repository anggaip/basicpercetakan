<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Pengendalian Stock Barang</title>

        <!-- Bootstrap CSS  -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/kastem.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="./asset/js/html5shiv.js"></script>
<![endif]-->
    
    </head>
    <body>
        <div class="container main-page">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="jumbotron header">
                            <p>
                            <center>
                            <h2 class="text-center">SISTEM PENGENDALIAN STOCK BARANG</h2>
                            </center>
                            </p>
                    </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="a" type="username" required="required" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="b" type="password" required="required" />
                                </div>
                                    <button type="submit" class="btn btn-info col-md-12">Masuk</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        


                </div>
            </div>
<!--================================ footer =======================-->
            <div class="panel panel-default" id="footer">
                    
                    <div class="panel-footer" id="footer">
                        &copy; Sistem Pengendalian stock barang. All Right Reserved
                    </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript">
         $('.form_date').datetimepicker({
                language:  'id',
                weekStart: 1,
                todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
            });
        </script>
    </body>
</html>