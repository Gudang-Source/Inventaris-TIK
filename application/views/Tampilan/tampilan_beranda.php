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
  <!-- Morris Chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/morris.js/morris.css">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<!-- <style type="text/css">
            #latarbelakang {
                background-image: url('http://localhost/Inventaris-TIK/assets/dist/img/bacground.jpg');
                background-repeat: repeat;
            }
        </style> -->
<body class="fixed hold-transition skin-red-light sidebar-mini" style="height: auto; min-height: 100%;">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- jika android / jika di kecilkan -->
      <span class="logo-mini"><img src="<?php echo base_url() ?>assets/dist/img/logo_itera_bulet_head.png" width="40px" height="40px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo base_url() ?>assets/dist/img/logo_itera_bulet_head.png" width="40px" height="40px"> Inventaris TIK</span>
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
    <!-- /.content-wrapper -->
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

<div class="modal fade" id="modal_masterhapus" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">×</span></button>
   <h4 class="modal-title">Hapus Data Master</h4>
 </div>
 <form class="form-horizontal" method="post" action="<?php echo base_url() ?>Master/hapus">
  <div class="modal-body">
    <input type="hidden" name="id_master" id="kode_master" value="">
    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
 </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
   <button class="btn btn-danger" id="btn_hps"><i class="fa fa-trash"></i>&nbsp&nbspHapus</button>
  </div>
  </form>
 </div>
 <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal_editbarang" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">×</span></button>
   <h4 class="modal-title">Edit Barang</h4>
  </div>
  <form class="form-horizontal" action="<?php echo base_url() ?>Table/edit_barang" method="post" enctype="multipart/form-data">
  <div class="modal-body">
    <input type="hidden" name="id" id="idtext" value="">
    <div class="form-group">
      <label for="inputMerkbrg" class="col-sm-3">Kondisi Barang</label>
      <div class="col-sm-8">
        <input type="radio" id="kondisi1" name="kondisibrg" value="Bagus" checked/>&nbsp&nbspBagus
        &nbsp&nbsp&nbsp&nbsp<input type="radio" id="kondisi2" name="kondisibrg" value="Rusak"/>&nbsp&nbspRusak
      </div>
    </div>
      <div class="form-group">
        <label for="inputTipe" class="col-sm-3">Lokasi Barang</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputlokasi" name="lokasi_brg" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputTipe" class="col-sm-3">Keterangan</label>
        <div class="col-sm-8">
          <textarea style="resize: none; width: 370px; height: 91px;" id="ket" name="textket" value=""></textarea>
        </div>
      </div>
    </div>
  <div class="modal-footer">
   <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
   <button type="submit"class="btn btn-success" id="btn_save"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
  </div>
</form>
 </div>
 <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

  <div class="control-sidebar-bg"></div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url() ?>">UPT TIK</a>.</strong> All rights
    reserved.
  </footer>
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
<!-- dropify -->
<script src="<?php echo base_url() ?>assets/dropify/dropify.min.js"></script>
<!-- dataTables -->
<script src="<?php echo base_url() ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.Js Chart -->
<script src="<?php echo base_url() ?>assets/morris.js/morris.min.js"></script>
<script src="<?php echo base_url() ?>assets/raphael/raphael.min.js"></script>

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
                                  // '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_tipe+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
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
        // $('#show_tipe').on('click','.item_hapus',function(){
        //     var id=$(this).attr('data');
        //     $('#modal_hapus').modal('show');
        //     $('[name="kode"]').val(id);
        // });

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

        //Update tipe
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

        //Hapus tipe
        // $('#btn_hapus').on('click',function(){
        //     var kode=$('#textkode').val();
        //     $.ajax({
        //     type : "POST",
        //     url  : "<?php echo base_url('edit/delete_tipe')?>",
        //     dataType : "JSON",
        //     data : {kode: kode},
        //     success: function(data){
        //         $('#modal_hapus').modal('hide');
        //             tampil_data_tipe();
        //           }
        //     });
        //         return false;
        //     });
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

<!-- View Barang -->
<script type="text/javascript">
$(document).ready(function(){
    tampil_data_barang();   //pemanggilan fungsi tampil tipe.

    $('#tabel_barang').dataTable();

    //fungsi tampil tipe
    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : "<?php echo base_url('Table/get_barang')?>",
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td width="5%" style="text-align:center;">'+'<img src="<?php echo base_url()?>assets/foto_brg/'+data[i].foto_brg+'" width="100%">'+'</td>'+
                            '<td>'+data[i].nama_brg+'</td>'+
                            '<td>'+data[i].nama_tipe+'</td>'+
                            '<td>'+data[i].merk_brg+'</td>'+
                            '<td>'+data[i].versi_brg+'</td>'+
                            '<td>'+data[i].kondisi_brg+'</td>'+
                            '<td style="text-align:center;">'+
                            //'<a href="<?php echo base_url()?>Table/daftarbarang/'+data[i].id_brg+'/'+data[i].nama_brg+'" class="btn btn-primary btn-xs">Selengkapnya...</a>'+
                            '<button type="button" name="view" class="btn btn-success btn-xs view_data" id="'+data[i].id_brg+'"><i class="fa fa-eye"></i>&nbsp&nbspLihat</button> | '+' '+
                            '<a href="javascript:;" name="edit" class="btn btn-primary btn-xs edit_data" id="'+data[i].id_brg+'""><i class="fa fa-edit"></i>&nbsp&nbspEdit</button>'+
                            '</td>'+
                            '</tr>';
                }
                $('#show_barang').html(html);
            }

        });
    }

// Detail Barang
    $('#show_barang').on('click','.view_data',function(){
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

    //GET UPDATE
    $('#show_barang').on('click','.edit_data',function(){
        var id=$(this).attr('id');
        $.ajax({
            type : "GET",
            url  : '<?php echo base_url()?>Table/get_barang_kode',
            dataType : 'json',
            data : {id:id},
            success: function(data){
                $.each(data,function(kondisi_brg, lokasi_brg, ket){
                    $('#modal_editbarang').modal('show');
                    $('[name="id"]').val(id);
                    $('[name="lokasi_brg"]').val(data.lokasi_brg);
                    $('[name="textket"]').val(data.ket);

                });
            }
        });
        return false;
    });
  });
</script>

<!-- Datepicker -->
<script>
$('#datepicker').datepicker({
 format: "yyyy-mm-dd",
 autoclose: true
})
</script>
<script>
// Timepicker
$('.timepicker').timepicker({
  showInputs: false
})
</script>

<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_master();   //pemanggilan fungsi tampil tipe.

        $('#data_master').dataTable();

        //fungsi tampil tipe
        function tampil_data_master(){
            $.ajax({
                type  : 'ajax',
                url   : "<?php echo base_url('Master/get_master')?>",
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td width="5%" style="text-align:center;">'+'<img src="<?php echo base_url()?>assets/foto_brg/'+data[i].foto_master+'" width="100%">'+'</td>'+
                                '<td>'+data[i].nama_master+'</td>'+
                                '<td>'+data[i].nama_tipe+'</td>'+
                                '<td>'+data[i].merk_master+'</td>'+
                                '<td>'+data[i].versi_master+'</td>'+
                                '<td>'+data[i].umur_master+'</td>'+
                                '<td style="text-align:center;">'+
                                '<div class="btn-group">'+
                                  '<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-edit"></i>'+
                                  '<span class="caret"></span>'+
                                  '</span class="sr-only"></span>'+
                                  '</button>'+
                                  '<ul class="dropdown-menu" role="menu">'+
                                  '<li><a href="<?php echo base_url()?>Master/tambah/'+data[i].id_master+'">Tambah</a></li>'+
                                  '<li><a href="javascript:;" class="btn-md master_hapus" data="'+data[i].id_master+'">Hapus</a>'+
                                  '</li>'+
                                  '</ul>'+
                                  '</div>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_master').html(html);
                }

            });
        }

        //GET HAPUS
        $('#show_master').on('click','.master_hapus',function(){
            var id=$(this).attr('data');
            $('#modal_masterhapus').modal('show');
            $('[name="id_master"]').val(id);
        });

      });
</script>

<!-- <script type="text/javascript">
 $(function () {
   "use strict";
   // AREA CHART
   var area = new Morris.Line({
     element: 'line-chart',
     resize: true,
     data: <?php echo $jumlah_brg?>,
     xkey: 'tanggal_masuk',
     ykeys: ['jumlah'],
     labels: ['Jumlah'],
     lineColors: ['#3c8dbc'],
     hideHover: 'auto'
   });
   //DONUT CHART
   var donut = new Morris.Donut({
     element: 'donut-chart',
     resize: true,
     colors: ["#3c8dbc", "#f56954"],
     data: [
       {label: "Bagus", value: <?php echo $bagus;?>},
       {label: "Rusak", value: <?php echo $rusak;?>},
     ],
     hideHover: 'auto'
   });
 });
</script> -->

<script src="<?php echo base_url() ?>assets/Highcharts-7.2.0/highcharts.js"></script>
<script src="<?php echo base_url() ?>assets/Highcharts-7.2.0/modules/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/Highcharts-7.2.0/modules/export-data.js"></script>
<script type="text/javascript">
Highcharts.chart('line-chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});
Highcharts.chart('donut-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Banyak Barang Bagus & Rusak'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Other',
            y: 7.05
        }]
    }]
});
</script>

<!-- View Barang -->
<!-- <script type="text/javascript">
$(document).ready(function(){
    tampil_data_brng();   //pemanggilan fungsi tampil tipe.

    $('#tabel_brng').dataTable();

    //fungsi tampil tipe
    function tampil_data_brng(){
        $.ajax({
            type  : 'ajax',
            url   : "<?php echo base_url()?>Table/get_daftar_brg/",
            async : false,
            data : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                            '<td width="5%" style="text-align:center;">'+'<img src="<?php echo base_url()?>assets/foto_brg/'+data[i].foto_brg+'" width="100%">'+'</td>'+
                            '<td style="text-align:center;">'+data[i].nama_brg+'</td>'+
                            '<td style="text-align:center;">'+data[i].nama_tipe+'</td>'+
                            '<td style="text-align:center;">'+data[i].merk_brg+'</td>'+
                            '<td style="text-align:center;">'+data[i].versi_brg+'</td>'+
                            '<td style="text-align:center;">'+data[i].kondisi_brg+'</td>'+
                            '<td style="text-align:center;">'+
                            '<button type="button" name="view" class="btn btn-success btn-xs view_data" id="'+data[i].id_brg+'"><i class="fa fa-eye"></i>&nbsp&nbspLihat</button>'+' '+
                            '<a href="javascript:;" name="edit" class="btn btn-primary btn-xs edit_data" id="'+data[i].id_brg+'""><i class="fa fa-edit"></i>&nbsp&nbspEdit</button>'+
                            '</tr>';
                }
                $('#show_brng').html(html);
            }

        });
    }

// Detail Barang
    $('#show_brng').on('click','view_data',function(){
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

    //GET UPDATE
    $('#show_brng').on('click','edit_data',function(){
        var id=$(this).attr('id');
        $.ajax({
            type : "GET",
            url  : '<?php echo base_url()?>Table/get_barang_kode',
            dataType : 'json',
            data : {id:id},
            success: function(data){
                $.each(data,function(kondisi_brg, lokasi_brg, ket){
                    $('#modal_editbarang').modal('show');
                    $('[name="id"]').val(id);
                    $('[name="lokasi_brg"]').val(data.lokasi_brg);
                    $('[name="textket"]').val(data.ket);

                });
            }
        });
        return false;
    });
  });
</script> -->
</body>
</html>
