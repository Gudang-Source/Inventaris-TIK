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
         <form class="form-horizontal">
           <div class="form-group">
           <label class="col-sm-2">Tipe Barang :</label>
         </div>
         <div class="form-group">
           <div class="col-sm-2">
           <select name="tipe" id="tipe" class="form-control" onchange="getTipe()">
             <option value="">Show All</option>
             <?php foreach ($tipe as $tipe ) {
               echo "<option value='".$tipe->id_tipe."'>".$tipe->nama_tipe."</option>";}?>
             </select>
           </div>
           <!-- <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>&nbsp&nbspCari</button> -->
         </div>
         </form>
       <table class="table table-bordered table-hover datatable" id="tabel_barang" role="grid">
         <thead>
         <tr>
          <th style="text-align:center;" >Foto</th>
          <th style="text-align:center;">Nama Barang</th>
          <th style="text-align:center;">Tipe Barang</th>
          <th style="text-align:center;">Merk Barang</th>
          <th style="text-align:center;">Versi Barang</th>
          <th style="text-align:center;">Kondisi Barang</th>
          <th style="text-align:center;">Detail</th>
         </tr>
       </thead>
        <tbody id="show_barang">
        </tbody>
      </table>
    </div>
       </div>
   </div>
 </div>
 <script type="text/javascript">
   function getTipe(){
     var tipe = $("#tipe").val();
     $.ajax({
       type:"POST",
       url: "<?php echo base_url()?>Table/get_tipe_kode",
       data: {tipe:tipe},
       dataType : "json",
       success:function(data){
         var html = '';
         var i;
         for(i=0; i<data.length; i++){
             html += '<tr>'+
                     '<td width="5%">'+'<img src="<?php echo base_url()?>assets/foto_brg/'+data[i].foto_brg+'" width="100%">'+'</td>'+
                     '<td>'+data[i].nama_brg+'</td>'+
                     '<td>'+data[i].nama_tipe+'</td>'+
                     '<td>'+data[i].merk_brg+'</td>'+
                     '<td>'+data[i].versi_brg+'</td>'+
                     '<td>'+data[i].kondisi_brg+'</td>'+
                     '<td style="text-align:center;">'+
                     //'<a href="<?php echo base_url()?>Table/daftarbarang/'+data[i].id_brg+'" class="btn btn-primary btn-xs">Selengkapnya...</a>'+
                      '<button type="button" name="view" class="btn btn-success btn-xs view_data" id="'+data[i].id_brg+'"><i class="fa fa-eye"></i>&nbsp&nbspLihat</button>'+' '+
                      '<a href="javascript:;" name="edit" class="btn btn-primary btn-xs edit_data" id="'+data[i].id_brg+'""><i class="fa fa-edit"></i>&nbsp&nbspEdit</button>'+
                     '</td>'+
                     '</tr>';
         }
         $('#show_barang').html(html);
       },
       error:function(){
         alert("Search failed");
       }
    });
  }
 </script>
</section>
