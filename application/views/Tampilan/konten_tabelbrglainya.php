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
          <th style="text-align:center;">Foto</th>
          <th style="text-align:center;">Nama Barang</th>
          <th style="text-align:center;">Tipe Barang</th>
          <th style="text-align:center;">Merk Barang</th>
          <th style="text-align:center;">Versi Barang</th>
          <th style="text-align:center;">Kondisi Barang</th>
          <th style="text-align:center;">Detail</th>
         </tr>
       </thead>
        <tbody id="show_brng">
              <!-- <tr class="odd gradeX">
                <td width="5%"><img src="<?php echo base_url()?>assets/foto_brg/<?php echo $barang->foto_brg; ?>" width="100%"></td>
                <td style="text-align:center;"><?php echo $barang->nama_brg; ?></td>
                <td style="text-align:center;"><?php echo $barang->nama_tipe; ?></td>
                <td style="text-align:center;"><?php echo $barang->merk_brg; ?></td>
                <td style="text-align:center;"><?php echo $barang->versi_brg; ?></td>
								<td style="text-align:center;"><?php echo $barang->kondisi_brg; ?></td>
                <td style="text-align:center;">
                <button type="button" name="view" class="btn btn-info btn-xs btn-flat view_data" id="<?php echo $barang->id_brg; ?>"><i class="fa fa-eye"></i>&nbsp&nbspLihat</button> |
                <button type="button" name="edit" class="btn btn-warning btn-xs btn-flat edit_data" id="<?php echo $barang->id_brg; ?>"><i class="fa fa-edit"></i>&nbsp&nbspEdit</button>
              </td>
              </tr> -->
        </tbody>
      </table>
    </div>
       </div>
   </div>
 </div>
</section>
