<section class="content">
 <div class="row">
   <div class="col-xs-12">
     <div class="box box-danger">
       <?php
       $info = $this->session->flashdata('info');
       if(!empty($info))
       {
        echo $info;
       }
       ?>
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Tabel Master</h3>
           <div class="box-tools pull-right">
           </div>
       </div>
       <div class="box-body">
      <a href="<?php echo base_url() ?>Add" class="btn btn-primary btn-flat pull-left"> <i class="fa fa-plus-circle"></i>&nbsp&nbspTambahkan Barang</a><br></br><br></br>
       <table class="table table-bordered table-hover datatable" id="data_master" role="grid">
         <thead>
         <tr>
          <th style="text-align: center">Foto</th>
          <th style="text-align: center">Nama Barang</th>
          <th style="text-align: center">Tipe Barang</th>
          <th style="text-align: center">Merk Barang</th>
          <th style="text-align: center">Versi Barang</th>
          <th style="text-align: center">Umur Efektif Barang(Bulan)</th>
          <th style="text-align: center">Aksi</th>
         </tr>
       </thead>
         <tbody id="show_master">
        </tbody>
      </table>
       </div>
     </div>
   </div>
 </div>
   </section>
