<!DOCTYPE html>
<html lang="en">


   <?php $this->load->view('header/header')?>

   <body>
    <!-- Page Content -->
    <div class="container"style="padding-top:100px;">




        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Berita

                </h1>

            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Projects Row -->


        <div class="row">
            <?php foreach($team as $a):?>
            <div class="col-md-12 img-portfolio">
                <a href="<?=base_url()?>index.php/welcome/detail_berita/<?=$a->id_berita ?>">
                    <img class="img-responsive img-hover" src="<?php echo base_url() ?>images/slider/<?php echo $a->gambar_berita ?>" style = ' max-width:100%; max-height:100%; height:350px; width:100%; padding-bottom:10px;' alt="">
                </a>

                <h3>
                    <a <?=anchor('welcome/detail_berita/'.$a->id_berita, $a->judul_berita)?> </a>
                </h3>

                <p><?php echo substr($a->deskripsi_berita,0,150) ?>...</p>

                <hr>
            </div>
            <?php endforeach ?>
            </div>


        <hr>

            <!-- Pagination -->
        <center>
              <?php echo $this->pagination->create_links();?>
        </center>


        <!-- /.row -->

        <hr>

        <!-- Footer -->

    </div>
    <!-- /.container -->
<?php $this->load->view('footer/footer')?>
    <!-- jQuery -->


</html>
