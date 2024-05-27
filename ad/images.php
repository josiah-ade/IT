<?php 
    require('components/images/get_value.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title> Images</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/main.min.css">

        <!-- Fonts Icon CSS -->
        <link href="assets/css/all.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/sweetalert.css">
    </head>
    <body>
    <?php if($shower){?>
        <div class="bodyrack">
            <div class="cardcx container-fluid">
                <div class="cardcardcx">
                    <form id="admlogin" method="post">
                        <div class="row">
                            <div class="col-11 pr0">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search Images" id="searcher">
                                </div>
                            </div>
                            <div class="col-1 pl0">
                                <button class="btn btn-dark" type="submit" ><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container-fluid padtoper">
                <div class="card loko">
                    <div id="loaderr" class="loaderr">
                        <div  class="loaderbar"></div>
                </div>
                    <div class="card-body">
                        <div id="rowcat" class="row">
                            <?php 
                                while($row = mysqli_fetch_assoc($res)){
                                    $images = $row['url'];
                            ?>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 rempad ">
                                <i class="fas fa-check flaterk"></i>
                                <img class="imgaego img-thumbnail" src="<?php echo $images?>" />
                                <h6><?php echo ucwords($row['title'])?> </h6>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footselect container-fluid">
                <button id="butt_b" class="btn btn-dark" disabled>Select</button>
                <button id="butt_b2" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    <?php }else{ ?>
        <div class="bodyrack2">
            <h4>You have no permission to view this page</h4>
        </div>
    <?php } ?>
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/js/main.min.js"></script>
        <script src="assets/js/sweetalert2.min.js"></script>
        <script src="assets/js/main2.js"></script>
    </body>
</html>