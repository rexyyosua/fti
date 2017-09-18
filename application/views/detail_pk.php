<!DOCTYPE html>
<html lang="en">

<body>

    <?php $this->load->view('header/header')?>

    <!-- Page Content -->
    <div class="container" style="padding-top:100px">

    <?php foreach($pk as $a):?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small><a href="#"></a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><?=$a->judul?></li>
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




                <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Divisi</h3>
            </div>

            <?php foreach($dvs as $a):?>
            <div class="col-sm-3 col-xs-6">
                <a href="<?=base_url()?>">
                    <img class="img-responsive portfolio-item" src="<?=base_url()?>assets/images/<?=$a->gambar?>" style = ' max-width:100%; max-height:100%; height:100px; width:200px'alt="">
                </a>
            </div>
            <?php endforeach ?>


            </div>
        <!-- /.row -->

        <hr>
</div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>List Divisi</h4>
                    <div class="row">
                        <div class="col-lg-9">
                        <?php foreach($dvss as $a): ?>
                            <ul class="list-unstyled">
                                <li>
                                    <?=anchor('welcome/details_divisi/'.$a->id, $a->judul)?>
                                </li>
                        <?php endforeach ?>

                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>

    <?php $this->load->view('footer/footer')?>
    <!-- /.container -->
</body>

</html>
