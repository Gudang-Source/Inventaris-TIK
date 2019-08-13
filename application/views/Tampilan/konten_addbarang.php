<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box">
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Barang Baru</h3>
       </div>
       <?php foreach ($data->result() as $row ) { ?>
         <div class="box-body">
       <form class="form" action="<?php echo base_url();?>Add/tambahbarang" method="post" enctype="multipart/form-data">
         <input type="text" name="gmbrbrg" value="<?php echo $row->foto_master;?>" hidden>
         <input type="text" name="tipe_brg" value="<?php echo $row->id_tipe;?>" hidden>

          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <br><label for="Inputnamabrg" class="col-sm-4 control-label">Nama Barang</label>
              <div class="col-sm-7">
              <input type="text" class="form-control" id="Inputnamabrg" name="namabrg" readonly value="<?php echo $row->nama_master; ?>"></br>
            </div>
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            <br><label for="inputMerkbrg" class="col-sm-4 control-label">SN</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="inputMerkbrg" name="sn_brg" placeholder="SN" required></br>
            </div>
          </div>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputTipe" class="col-sm-4 control-label">Merk Barang</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputMerkbrg" name="merkbrg" readonly value="<?php echo $row->merk_master; ?>"></br>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputkondisi" class="col-sm-4 control-label">Kondisi</label>
              <div class="col-sm-7">
                <input type="radio" id="optionsRadios1" name="kondisibrg" value="Bagus" checked/>&nbsp&nbspBagus
                &nbsp&nbsp&nbsp&nbsp<input type="radio" id="optionsRadios2" name="kondisibrg" value="Rusak"/>&nbsp&nbspRusak<br></br>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputTipe" class="col-sm-4 control-label">Tipe Barang</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputMerkbrg" name="tipebrg" readonly value="<?php echo $row->nama_tipe; ?>"></br>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="inputlokasi" class="col-sm-4 control-label">Lokasi</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputlokasi" name="lokasibrg" placeholder="Lokasi" required></br>
              </div>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputversi" class="col-sm-4 control-label">Versi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="inputversi" name="versibrg" readonly value="<?php echo $row->versi_master; ?>"></br>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="inputTanggal" class="col-sm-4 control-label">Tanggal Masuk</label>
          <div class="col-sm-7">
            <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="datepicker" name="tanggalbrg" placeholder="yyyy-mm-dd" required></br>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
        <label for="inputUmur" class="col-sm-4 control-label">Umur Barang Efektif</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="inputUmur" name="umurbrg" readonly value="<?php echo $row->umur_master; ?> Bulan"></br>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <div class="col-sm-offset-8">
          <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button></br>
        </div>
      </div>
    </div>
  </div>
      </form>
      <!-- /.box-body-->
       </div>
       <!-- /.box-->
     </div>
   </div>
 </div>
 <?php }?>
   </section>
