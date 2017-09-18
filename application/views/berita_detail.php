<!DOCTYPE html>
<html lang="en">

<body>

    <?php $this->load->view('header/header')?>

    <!-- Page Content -->
    <div class="container">

    <?php foreach($berita as $a):?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small><a href="#"></a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li class="active"><?=$a->judul_berita?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->

                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $a->tanggal_berita?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo base_url()?>images/slider/<?php echo $a->gambar_berita ?>" style = ' max-width:100%; max-height:100%; height:400px; width:900px' alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $a->judul_berita ?></p>
                <p><?php echo nl2br($a->deskripsi_berita)?></p>

                <hr>
                <?php endforeach ?>
        <hr>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>
  </div>
  <?php $this->load->view('footer/footer')?>

    <!-- /.container -->
</body>

</html>
