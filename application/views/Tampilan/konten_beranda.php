<section class="content">
 <div class="row">
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-aqua">
       <div class="inner">
         <h3>Add</h3>

         <p>Tambah Barang Baru</p>
       </div>
       <div class="icon">
         <i class="fa fa-plus-circle"></i>
       </div>
       <a href="<?php echo base_url() ?>Add" class="small-box-footer">Tambahkan Barang <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <div class="col-lg-100 col-xs-6">
     <!-- small box -->
     <div class="small-box bg-red">
       <div class="inner">
         <h3>Edit</h3>

         <p>Edit Tipe Barang</p>
       </div>
       <div class="icon">
         <i class="fa fa-edit"></i>
       </div>
       <a href="<?php echo base_url() ?>Edit" class="small-box-footer">Edit Tipe <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Tabel Master</h3>
       </div>
       <table class="table table-bordered table-hover datatable" id="example2" role="grid">
         <thead>
         <tr>
          <th>Foto</th>
          <th>Nama Barang</th>
          <th>Tipe Barang</th>
          <th>Merk Barang</th>
          <th>Versi Barang</th>
          <th>Umur Efektif Barang</th>
          <th>Tanggal Masuk</th>
          <th> </th>
         </tr>
       </thead>
        <?php foreach ($data->result() as  $row) {
          // code...
         ?>
        <tbody>
         <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_master;?>" width="100%"></center></td>
         <td><?php echo $row->nama_master;?></td>
         <td><?php echo $row->nama_tipe;?></td>
         <td><?php echo $row->merk_master;?></td>
         <td><?php echo $row->versi_master;?></td>
         <td><?php echo $row->umur_master;?> Bulan</td>
         <td><?php echo $row->tanggal_master;?></td>
         <td>
           <div class="btn-group">
             <button class="btn btn-info" type="button">Edit</button>
             <button class="btn btn-info dropdown-toggle" aria-expanded="false" type="button" data-toggle="dropdown">
               <span class="caret"></span>
             </span class="sr-only"></span>
           </button>
           <ul class="dropdown-menu" role="menu">
             <li><a href="#">Tambah</a></li>
             <li><a href="#">Hapus</a></li>
           </ul>
         </div>
           <!--<label class="label label-"><a href="#"><i class="fa fa-plus-circle"> Tambah Data</label></i>
         </a>-->
         </td>
        <?php } ?>
        </tbody></table>
       </div>
   </div>
 </div>
   </section>
