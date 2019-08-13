<section class="content">
 <div class="row">
   <div class="col-xs-12">
    <div class="box box-danger">
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
       <table class="table table-bordered table-hover datatable" id="tabel_brg" role="grid">
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
        <tbody>
          <?php foreach($data->result() as $barang){?>
              <tr class="odd gradeX">
                <td width="5%"><img src="<?php echo base_url()?>assets/foto_brg/<?php echo $barang->foto_brg; ?>" width="100%"></td>
                <td><?php echo $barang->nama_brg; ?></td>
                <td><?php echo $barang->nama_tipe; ?></td>
                <td><?php echo $barang->merk_brg; ?></td>
                <td><?php echo $barang->versi_brg; ?></td>
								<td><?php echo $barang->kondisi_brg; ?></td>
              </tr>
					<?php }?>
        </tbody>
      </table>
    </div>
       </div>
   </div>
 </div>
 <script type="text/javascript">
 $(document).ready(function(){

     $('#tabel_brg').dataTable({

     });
   });
  </script>
</section>
