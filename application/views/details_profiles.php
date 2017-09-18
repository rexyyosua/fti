<!DOCTYPE html>
<html lang="en">

<body>

    <?php $this->load->view('header/header')?>

    <!-- Page Content -->
    <div class="container"style="padding-top:100px;">

    <?php foreach($profil as $a):?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small><a href="#"></a>
                    </small>
                </h1>
                <ol class="breadcrumb">

                    <h1><?=$a->judul?></h1>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">


                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $a->tanggal?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo base_url()?>assets/images/<?php echo $a->gambar ?>" style = ' max-width:100%; max-height:100%; height:400px; width:900px' alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $a->judul ?></p>
                <p><?php echo nl2br($a->deskripsi)?></p>

                <hr>
                <?php endforeach ?>
        <hr>

        </div>
        <!-- /.row -->



    </div>
  </div>
  <?php $this->load->view('footer/footer')?>

    <!-- /.container -->
</body>

</html>
