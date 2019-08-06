<section class="content">
 <div class="row">
   <div class="col-xs-12">
    <div class="box box-primary">
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Data Barang</h3>
       </div>
       <div class="box-body">
         <?php
         $info = $this->session->flashdata('info');
         if(!empty($info))
         {
          echo $info;
         }
         ?>
         <form class="form-horizontal">
           <div class="form-group">
           <label class="col-sm-2">Tipe Barang :</label>
         </div>
         <div class="form-group">
           <div class="col-sm-2">
           <select name="tipe_brg" class="form-control" id="tipe">
             <option value="">Show All</option>
             <?php foreach ($data as $tipe ) {
               echo "<option value='".$tipe->id_tipe."'>".$tipe->nama_tipe."</option>";}?>
             </select>
           </div>
           <button type="submit" name="search" value="Cari" class="btn btn-default"><i class="fa fa-search"></i>&nbsp&nbspCari</button>
         </div>
         </form><br></br>
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
           foreach ($data as  $row) {
          ?>
        <tbody id="show_barang">
         <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_brg;?>" width="100%"></center></td>
         <td><?php echo $row->nama_brg;?></td>
         <td><?php echo $row->nama_tipe;?></td>
         <td><?php echo $row->merk_brg;?></td>
         <td><?php echo $row->versi_brg;?></td>
         <td><?php echo $row->kondisi_brg?></td>
         <td><button type="button" name="view" class="btn btn-success btn-xs view_data" id="<?php echo $row->id_brg?>"><i class="fa fa-eye"></i>&nbsp&nbspLihat</button>
           <button type="button" name="edit" class="btn btn-primary btn-xs edit_data" id="<?php echo $row->id_brg?>" data-toggle="modal" data-target="#modal_editbarang"><i class="fa fa-edit"></i>&nbsp&nbspEdit</button>
         </td>
       <?php } ?>
        </tbody>
      </table>
    </div>
       </div>
   </div>
 </div>
   </section>
