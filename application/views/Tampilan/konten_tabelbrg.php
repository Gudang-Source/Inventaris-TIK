<section class="content">
 <div class="row">
   <div class="col-xs-12">
    <div class="box box-primary">
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
        <?php
          foreach ($data->result() as  $row) {
         ?>
        <tbody>
         <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_brg;?>" width="100%"></center></td>
         <td><?php echo $row->nama_brg;?></td>
         <td><?php echo $row->nama_tipe;?></td>
         <td><?php echo $row->merk_brg;?></td>
         <td><?php echo $row->versi_brg;?></td>
         <td><?php echo $row->SN;?></td>
         <td><?php echo $row->kondisi_brg?></td>
         <td><?php echo $row->umur_brg;?> Bulan</td>
         <td><?php echo $row->lokasi_brg;?></td>
         <td><a href="#" class="btn btn-success">Lihat&nbsp&nbsp<i class="fa fa-arrow-circle-right">
         </i>
         </a>
         </td>
       <?php } ?>
        </tbody>
      </table>
       </div>
   </div>
 </div>
   </section>
