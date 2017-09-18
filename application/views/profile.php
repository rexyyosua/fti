<?php $this->load->view('header/header')?>
<body>
 <!-- Page Content -->
 <div class="container"style="padding-top:100px;">




     <!-- Page Heading/Breadcrumbs -->
     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">Profile

             </h1>

         </div>
     </div>
     <!-- /.row -->
     <hr>
     <!-- Projects Row -->


     <div class="row">
         <?php foreach($profil as $a):?>
         <div class="col-md-12 img-portfolio">
             <a href="<?=base_url()?>index.php/welcome/detail_berita/<?=$a->id ?>">
                 <img class="img-responsive img-hover" src="<?php echo base_url() ?>assets/images/<?php echo $a->gambar?>" style = ' max-width:70%; max-height:100%; height:350px; width:100%; padding-bottom:10px;' alt="">
             </a>

             <h3>
                 <a <?=anchor('welcome/profiles_details/'.$a->id, $a->judul)?> </a>
             </h3>

             <p><?php echo substr($a->deskripsi,0,150) ?>...</p>

             <hr>
         </div>
         <?php endforeach ?>
         </div>




     <!-- /.row -->

     <hr>

     <!-- Footer -->

 </div>

<?php $this->load->view('footer/footer')?>
