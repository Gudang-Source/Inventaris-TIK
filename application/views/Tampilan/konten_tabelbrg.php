<section class="content">
 <div class="row">
   <div class="col-xs-12">
    <div class="box box-primary">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Barang</h3>
       </div>
       <div class="box-body">
         <!-- <div class="col-md-offset-10"> -->
          <!-- <label class="control-label">Tipe Barang :</label> -->
           <!-- <select class="form-control" id="tipe_brg"> -->
             <!-- <option value="0">Show All</option> -->
             <!-- <?php// foreach ($data->result() as $tipe ) {
             // echo "<option value='".$tipe->id_tipe."'>".$tipe->nama_tipe."</option>";}?>
           </select>
         </div><br></br>-->
       <table class="table table-bordered table-hover datatable" id="tabel_barang" role="grid">
         <thead>
         <tr>
          <th>Foto</th>
          <th>Nama Barang</th>
          <th>Tipe Barang</th>
          <th>Merk Barang</th>
          <th>Versi Barang</th>
          <th>Kondisi Barang</th>
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
         <td><?php echo $row->kondisi_brg?></td>
         <td><input type="button" name="view" value="Lihat" class="btn btn-success btn-xs view_data" id="<?php echo $row->id_brg?>">
         </td>
       <?php } ?>
        </tbody>
      </table>
    </div>
       </div>
   </div>
 </div>
   </section>
