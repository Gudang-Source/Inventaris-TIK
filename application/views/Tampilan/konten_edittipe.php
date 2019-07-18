<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box">
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Tipe Barang Baru</h3>
       </div>
         <div class="box-body">
           <button type="button" name="tambah" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah Tipe</button><br></br>
           <table class="table table-bordered table-hover datatable" id="example2" role="grid">
             <thead>
               <tr>
                 <th width="5%">No</th>
                 <th>Nama Tipe</th>
                 <th width="20%">Edit Tipe</th>
               </tr>
             </thead>
             <tbody>
               <?php
               $no=1;
               foreach ($data->result() as $row) { ?>
               <tr>
                 <td><?php echo $no++ ?></td>
                 <td><?php echo $row->nama_tipe ?></td>
                 <td>
                   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_edit">Edit&nbsp&nbsp<i class="fa fa-edit"></i></button>
                   <a href="#" class="btn btn-danger">Hapus&nbsp&nbsp<i class="fa fa-trash"></i></a>
                 </td>
               </tr>
             <?php } ?>
             </tbody>
           </table>
      <!-- /.box-body-->
       </div>
     </div>
   </div>
 </div>
   </section>
