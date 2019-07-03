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
         <i class="ion ion-plus"></i>
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
         <i class="ion ion-edit"></i>
       </div>
       <a href="<?php echo base_url() ?>Edit" class="small-box-footer">Edit Tipe <i class="fa fa-arrow-circle-right"></i></a>
     </div>
   </div>
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Barang</h3>
       </div>
       <table class="table table-bordered table-hover datatable" id="example2" role="grid">
         <thead>
         <tr>
          <th>Foto</th>
          <th>Nama Barang</th>
          <th>Tipe Barang</th>
          <th>Merk Barang</th>
          <th>Versi Barang</th>
          <th>SN</th>
          <th>Kondisi Barang</th>
          <th>Umur Efektif Barang</th>
          <th>Lokasi Barang</th>
          <th>Detail</th>
         </tr>
       </thead>
        <?php foreach ($data->result() as  $row) {
          // code...
         ?>
        <tbody>
         <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_profil/<?php echo $row->foto_brg;?>" width="100%"></center></td>
         <td><?php echo $row->nama_brg;?></td>
         <td><?php echo $row->nama_tipe;?></td>
         <td><?php echo $row->merk_brg;?></td>
         <td><?php echo $row->versi_brg;?></td>
         <td><?php echo $row->SN;?></td>
         <td><?php echo $row->kondisi?></td>
         <td><?php echo $row->umur_brg;?> Bulan</td>
         <td><?php echo $row->lokasi;?></td>
         <td><label class=""><a href="#">Lihat</label><i class="fa fa-arrow-circle-right">
         </i>
         </a>
         </td>
        <?php } ?>
        </tbody></table>
       </div>
   </div>
 </div>
   </section>
