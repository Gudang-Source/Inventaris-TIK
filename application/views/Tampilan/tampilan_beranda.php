<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/sanspro.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dropify/dropify.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/custom.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<style type="text/css">
            #latarbelakang {
                background-image: url('http://localhost:8080/Inventaris-TIK/assets/dist/img/bacground.jpg');
                background-repeat: repeat;
            }
        </style>
<body id="latarbelakang" class="latarbelakang hold-transition skin-blue layout-boxed sidebar-mini" style="height: auto; min-height: 100%;">
<!-- Site wrapper -->
<div>
 &nbsp
</div>
<div class="wrapper">
 <div>
  &nbsp
 </div>
 <div class="container base">
  <div class="container">
      <div class="row ">
        <div class="col-md-1">
         <a href="<?php echo base_url() ?>">
           <img src="<?php echo base_url() ?>assets/dist/img/logo-itera-oke.png" width="70px" style="margin-bottom:10px; ">
         </a>
        </div>
        <div class="col-md-5">
          <h3>Sistem Informasi Inventaris TIK</h3>
          <h5>UPT TIK</h5>
          <p><em>"Institut Teknologi Sumatera"</em></p>
        </div>
      </div>
  </div>
</div>
 <div>
  &nbsp
 </div>
</div>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- jika android / jika di kecilkan -->
      <span class="logo-mini"><b>TIK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b> Inventaris TIK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
        <li>
         <a href="<?php echo base_url() ?>Profil"><i class="fa fa-user"></i>&nbsp Administrator</a>
        </li>
        <li>
         <a href="<?php echo base_url() ?>Beranda/logout"><i class="fa fa-sign-out"></i>&nbsp Logout</a>
        </li>
       </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->
  <!-- Menu -->
  <?php $this->load->view($menu); ?>
  <!-- =============================================== -->
  <!-- / Menu -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $Welcome; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i><?php echo $judul; ?></a></li>
        <li><a href="#"><i class="fa fa-right"></i><?php echo $sub_judul; ?></a></li>
      </ol>
    </section>
    <!-- disini konten -->
    <?php $this->load->view($konten); ?>
    <!-- /.konten -->
  </div>
  <div class="modal fade" id="modal_edit" style="display: none;">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">×</span></button>
     <h4 class="modal-title">Edit Tipe</h4>
    </div>
    <form class="form-horizontal">
    <div class="modal-body">
       <div class="row">
         <div class="col-sm-2">
         <label for="inputTipe" class="control-label">Nama Tipe Baru</label>
       </div>
         <div class="col-sm-9">
           <input type="hidden" name="idtipe" id="textid" value="">
           <input type="text" class="form-control" name="namatipebaru" id="nama_tipe_baru" placeholder="Nama Tipe Baru">
         </div>
       </div>
    </div>
    <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
     <button class="btn btn-success" id="btn_simpan"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
    </div>
  </form>
   </div>
   <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
 </div>
 <div class="modal fade" id="modal_tambah" style="display: none;">
<div class="modal-dialog">
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span></button>
    <h4 class="modal-title">Tambah Tipe</h4>
  </div>
  <form class="form-horizontal">
   <div class="modal-body">
      <div class="row">
        <div class="col-sm-2">
        <label for="inputTipe" class="control-label">Nama Tipe</label>
      </div>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="namatipe" id="nama_tipe" placeholder="Nama Tipe">
      </div>
    </div>
  </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
    <button class="btn btn-success" id="btn_tambah"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
   </div>
 </form>
  </div>
  <!-- /.modal-content -->
 </div>
 <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal_hapus" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">×</span></button>
   <h4 class="modal-title">Hapus Tipe</h4>
 </div>
 <form class="form-horizontal">
  <div class="modal-body">
    <input type="hidden" name="kode" id="textkode" value="">
    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
 </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
   <button class="btn btn-danger" id="btn_hapus"><i class="fa fa-trash"></i>&nbsp&nbspHapus</button>
  </div>
  </form>
 </div>
 <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal_view" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">×</span></button>
   <h4 class="modal-title">Detil Barang</h4>
 </div>
  <div class="modal-body" id="show_detail">
 </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
  </div>
 </div>
 <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url() ?>">UPT TIK</a>.</strong> All rights
    reserved.
  </footer>
</div>
<div>
 &nbsp
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/dropify/dropify.min.js"></script>
<!-- dataTables -->
<script src="<?php echo base_url() ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_tipe();   //pemanggilan fungsi tampil tipe.

        $('#data_tipe').dataTable();

        //fungsi tampil tipe
        function tampil_data_tipe(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>Edit/get_tipe',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_tipe+'</td>'+
                                '<td style="text-align:center;">'+
                                  '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_tipe+'"><i class="fa fa-edit"></i>&nbsp&nbspEdit</a>'+' '+
                                  '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_tipe+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
                                '</td>'+
                                '</tr>';
                                no++;
                    }
                    $('#show_tipe').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_tipe').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : '<?php echo base_url()?>edit/gettipekode',
                dataType : 'json',
                data : {id:id},
                success: function(data){
                    $.each(data,function(id_tipe, nama_tipe){
                        $('#modal_edit').modal('show');
                        $('[name="namatipebaru"]').val(data.nama_tipe);
                        $('[name="idtipe"]').val(data.id_tipe);
                    });
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_tipe').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#modal_hapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Tambah tipe
        $('#btn_tambah').on('click',function(){
            var namatipe=$('#nama_tipe').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('edit/tambah_tipe')?>",
                dataType : "JSON",
                data : {namatipe: namatipe},
                success: function(data){
                    $('[name="namatipe"]').val("");
                    $('#modal_tambah').modal('hide');
                    tampil_data_tipe();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_simpan').on('click',function(){
          var namatipebaru=$('#nama_tipe_baru').val();
          var idtipe=$('#textid').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('edit/update_tipe')?>",
            dataType : "JSON",
            data : {namatipebaru: namatipebaru, idtipe: idtipe},
            success: function(data){
              $('[name="namatipebaru"]').val("");
              $('[name="tipebrg"]').val("");
              $('#modal_edit').modal('hide');
              tampil_data_tipe();
            }
          });
             return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('edit/delete_tipe')?>",
            dataType : "JSON",
            data : {kode: kode},
            success: function(data){
                $('#modal_hapus').modal('hide');
                    tampil_data_tipe();
                  }
            });
                return false;
            });
    });
</script>
<!-- dropify -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih file',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
		});
	});

</script>

<!-- View Detail Barang -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.view_data').click(function(){
      var id_barang = $(this).attr("id");

      $.ajax({
        type : "POST",
        url : "<?php echo base_url('table/getbarangkode')?>",
        data : {id_barang:id_barang},
        success:function(data){
          $('#show_detail').html(data);
          $('#modal_view').modal("show");
        }
      });

    });
  });
</script>

<!-- Datepicker -->
<script>
$('#datepicker').datepicker({
 format: "dd-mm-yyyy",
 autoclose: true
})
</script>
<script>
// Timepicker
$('.timepicker').timepicker({
  showInputs: false
})
</script>
</body>
</html>
