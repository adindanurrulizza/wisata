<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Info Penting</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/styleutama.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styleutama2.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav">
                <li>
                        <a href="<?php echo base_url() ?>index.php">Wisata Malang Kota</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url() ?>index.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/destinasi">Destinasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/info_penting">Info Penting</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">


                    
                    <hr>
                </div>
                


                                    <?php
                                    $no=1;
                                          if(isset($info)){
                                                foreach($info as $row){
                                            ?>

                                    <?php }
                                             }
                                                ?>
                                                            <div class="col-lg-12">

                    <h2 class=" text-center"><?php echo $row->judul;?>
                        <br>
                        <small><?php echo $row->tanggal;?></small>
                    </h2>
                    <hr>
                    <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->gambar) ?>" width="1000px" height="500px"></div></td>
                    <br>
                    <p><small><?php echo $row->isi;?></small></p>
                    <hr>
                </div>

                
            </div>
        </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>

</html>
