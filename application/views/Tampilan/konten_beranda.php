<section class="content">
 <div class="row">
   <div class="col-lg-100 col-xs-12">
     <!-- small box -->
     <div class="small-box bg-aqua">
       <div class="inner">
         <h3>TAMBAH</h3>

         <p>Tambah Barang Baru</p>
       </div>
       <div class="icon">
         <i class="fa fa-plus-circle"></i>
       </div>
       <a href="<?php echo base_url() ?>Add" class="small-box-footer">Tambahkan Barang <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>

   <div class="col-xs-12">
     <div class="box">
       <?php
       $info = $this->session->flashdata('info');
       if(!empty($info))
       {
        echo $info;
       }
       ?>
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Grafik</h3>
           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
           </div>
       </div>
       <div class="box-body">
       </div>
     </div>
   </div>
 </div>
   </section>
