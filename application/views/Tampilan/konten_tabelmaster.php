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
       <table class="table table-bordered table-hover datatable" id="example2" role="grid">
         <thead>
         <tr>
          <th>Foto</th>
          <th>Nama Barang</th>
          <th>Tipe Barang</th>
          <th>Merk Barang</th>
          <th>Versi Barang</th>
          <th>Umur Efektif Barang</th>
          <th>Aksi</th>
         </tr>
       </thead>
       <?php
       if(!empty($data)) {
         foreach ($data->result() as  $row) : ?>
         <td  width="10%"><center><img src="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_master;?>" width="100%"></center></td>
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
         </td>
        </tbody>
      <?php endforeach ?>
      </table>
    <?php }
    else { ?>
      <tr><td align="center">Tidak Ada Data</td></tr>
    <?php } ?>
       </div>
     </div>
   </div>
 </div>
   </section>
