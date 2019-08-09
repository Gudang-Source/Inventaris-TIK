<section class="content">
 <div class="row">
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
           <h3 class="box-title text-center">Data Tabel Master</h3>
           <div class="box-tools pull-right">
             <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
             </button>
           </div>
       </div>
       <div class="box-body">
      <a href="<?php echo base_url() ?>Add" class="btn btn-primary btn-flat pull-left"> <i class="fa fa-plus-circle"></i>&nbsp&nbspTambah Barang</a><br></br><br></br>
       <table class="table table-bordered table-hover datatable" id="data_master" role="grid">
         <thead>
         <tr>
          <th style="text-align: center">Foto</th>
          <th style="text-align: center">Nama Barang</th>
          <th style="text-align: center">Tipe Barang</th>
          <th style="text-align: center">Merk Barang</th>
          <th style="text-align: center">Versi Barang</th>
          <th style="text-align: center">Umur Efektif Barang</th>
          <th style="text-align: center">Aksi</th>
         </tr>
       </thead>
         <tbody id="show_master">
         <!-- <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_master;?>" width="100%"></center></td>
         <td><?php echo $row->nama_master;?></td>
         <td><?php echo $row->nama_tipe;?></td>
         <td><?php echo $row->merk_master;?></td>
         <td><?php echo $row->versi_master;?></td>
         <td><?php echo $row->umur_master;?> Bulan</td>
         <td>
           <div class="btn-group">
             <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-edit"></i>
               <span class="caret"></span>
             </span class="sr-only"></span>
           </button>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo base_url() ?>Master/tambah/<?php echo $row->id_master;?>">Tambah</a></li>
             <li><a href="<?php echo base_url() ?>Master/hapus/<?php echo $row->id_master;?>" onclick="return confirm('Hapus data ini?...')">Hapus</a></li>
           </ul>
         </div>
         </td> -->
        </tbody>
      </table>
       </div>
     </div>
   </div>
 </div>
   </section>
