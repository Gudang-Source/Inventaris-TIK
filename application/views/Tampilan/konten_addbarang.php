<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box">
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Barang Baru</h3>
       </div>
       <?php foreach ($data->result() as $row ) {
         ?>
         <?php }?>
         <div class="box-body">
       <form class="form" action="#" method="post" enctype="multipart/form-data">
         <input type="text" name="oldfile" value="<?php base_url() ?>assets/foto_brg/<?php echo $row->foto_master;?>" hidden>

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
              <input type="text" class="form-control" id="inputMerkbrg" name="sn" placeholder="SN" required></br>
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
              <label for="inputversi" class="col-sm-4 control-label">Kondisi</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="inputversi" name="versi" placeholder="Versi" required></br>
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
                <input type="text" class="form-control" id="inputlokasi" name="lokasi" placeholder="Lokasi" required></br>
              </div>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="inputversi" class="col-sm-4 control-label">Versi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="inputversi" name="versi" readonly value="<?php echo $row->versi_master; ?>"></br>
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
            <input type="text" class="form-control pull-right" id="datepicker" name="tanggalbrg" placeholder="dd-mm-yyyy" required></br>
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
   </section>
