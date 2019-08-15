<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box">
       <div class="box-header with-border">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Barang Baru</h3>
       </div>
         <div class="box-body">
       <form class="form-horizontal" action="<?php echo base_url(); ?>Add/adddata" method="post" enctype="multipart/form-data">
				<div class="form-group">
          <div class="form-group">
            <label for="exampleInputFile" class="col-sm-2 control-label">Foto Barang</label>
            <div class="col-sm-4">
              <input type="file" name="filefoto" class="dropify" data-height="135">
              <input type="text" name="oldfile" value=" " hidden>
              <p class="help-block">File Max 1 Mb</p>
            </div>
          </div>

          <label for="Inputnamabrg" class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="Inputnamabrg" name="namabrg" placeholder="Nama" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputMerkbrg" class="col-sm-2 control-label">Merk Barang</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputMerkbrg" name="merkbrg" placeholder="Merk">
          </div>
        </div>

        <div class="form-group">
          <label for="inputTipe" class="col-sm-2 control-label">Tipe Barang</label>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-10">
            <select class="form-control select2 select2-hidden-accessible" name="tipebrg" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
              <option value="">Pilih</option>
              <?php foreach ($data->result() as $tipe ) {
              echo "<option value='".$tipe->id_tipe."'>".$tipe->nama_tipe."</option>";}?>
            </select>
          </div>
          <div class="col-sm-offset-2">
            <a href="<?php echo base_url(); ?>Edit"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</a><br></br>
          </div>
        </div>
          </div>
        </div>

        <div class="form-group">
          <label for="inputversi" class="col-sm-2 control-label">Versi</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputversi" name="versi" placeholder="Versi" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputumur" class="col-sm-2 control-label">Umur Barang Efektif</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputUmur" name="umurbrg" placeholder="Satuan Bulan" required>
          </div>
        </div>

        <!--<div class="form-group">
          <label for="inputWaktu" class="col-sm-2 control-label">Tanggal Barang Masuk</label>
          <div class="col-sm-8">
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
            <input type="text" class="form-control pull-right" id="datepicker" name="tgglbrg" placeholder="dd/mm/yyy" required>
          </div>
          </div>
        </div>-->

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Data yang saya input Sudah Benar
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
          </div>
        </div>
      </form>
      <!-- /.box-body-->
       </div>
     </div>
   </div>
 </div>
   </section>
