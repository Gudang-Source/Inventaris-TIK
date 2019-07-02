<section class="content">
 <div class="row">
   <!-- ./col -->
   <div class="col-xs-12">
    <div class="box box-warning">
       <div class="box-header">
           <i class="fa fa-paperclip" aria-hidden="true"></i>
           <h3 class="box-title text-center">Tambah Barang Baru</h3>
       </div>
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
          <div class="col-sm-9">
            <input type="text" class="form-control" id="Inputnamabrg" name="Nama_brg" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputMerkbrg" class="col-sm-2 control-label">Merk Barang</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputMerkbrg" name="Merk_brg" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputTipe" class="col-sm-2 control-label">Tipe Barang</label>
          <div class="col-sm-9">
            <select class="form-control select2 select2-hidden-accessible" name="JK" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
              <option selected="selected">--<!--<?php echo $nama->tipe; ?>--></option>
              <option value=' '>Tipe 1</option>
              <option value=' '>Tipe 2</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputversi" class="col-sm-2 control-label">Versi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputversi" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputumur" class="col-sm-2 control-label">Umur Barang Efektif</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputUmur"required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputWaktu" class="col-sm-2 control-label">Waktu Barang Masuk</label>
          <div class="col-sm-9">
            <input type="datetime" class="form-control" id="inputWaktu" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputJumlah" class="col-sm-2 control-label">Jumlah</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputJumlah" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-10 col-sm-2">
            <button type="submit" class="btn btn-primary"><i class="fa fa-next"></i>&nbsp&nbspNext</button>
          </div>
        </div>
      </form>
      <div class="box-body">
      </div>
      <!-- /.box-body-->
       </div>
   </div>
 </div>
   </section>
