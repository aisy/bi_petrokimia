<script type="text/javascript" src="<?php echo base_url();?>vendor/jquery/jquery-1.11.1.min.js"></script>

<style>
/*titik untuk pemangilan class pagar untuk memenggil id*/
#notif_berhasil, #btn_ubah{
    display: none;
}
</style>

<script>
$(document).ready(function(){
    <?php if($this->session->flashdata('hapus')){?>
        setTimeout(function(){ 
            $('#notif_hapus').fadeOut();
        }, 3000);
    <?php }?>
    var modalContent = $('#modal-content');

    modalContent.on('click', '.holder-style', function(e) {
        e.preventDefault();

        modalContent.find('.holder-style').removeClass('holder-active');
        $(this).addClass('holder-active');
    });

    function findActive() {
        var activeModal = modalContent.find('.holder-active').attr('href');
        return activeModal;
    };

    // Form Skin Switcher
    $('.animation-switcher button').on('click', function() {
        $('.animation-switcher').find('button').removeClass('active-animation');
        $(this).addClass('active-animation item-checked');

        // Inline Admin-Form example 
        $.magnificPopup.open({
            removalDelay: 500, //delay removal by X to allow out-animation,
            items: {
                src: findActive()
            },
            // overflowY: 'hidden', // 
            callbacks: {
                beforeOpen: function(e) {
                    var Animation = $(".animation-switcher").find('.active-animation').attr('data-effect');
                    this.st.mainClass = Animation;
                }
            },
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });

    });

    // script Button tambah data untuk menampilkan tombol simpan dan menyembunyikan button ubah
    $('#btn_tambah_data').click(function(){
        $('#btn_simpan').show();
        $('#btn_ubah').hide();
    });


// script Button ajax untuk menyimpan data admin
    $('#btn_simpan').click(function(){
        $.ajax({
            url : '<?php echo base_url(); ?>admin/simpan',
            data : $('#form_tambah').serialize(),
            type : "POST",
            dataType : "json",
            success : function(result){
                $('.mfp-close').click();
                $('#notif_berhasil').show();
                $('#notif_berhasil').delay(3000).fadeOut();
                setTimeout(function(){ 
                    window.location = "<?php echo base_url(); ?>admin";
                }, 3000);
            }
        });
    });

    // script Button ajax untuk mengubah data
    $('#btn_ubah').click(function(){
        $.ajax({
            url : '<?php echo base_url(); ?>admin/ubah',
            data : $('#form_tambah').serialize(),
            type : "POST",
            dataType : "json",
            success : function(result){
                $('.mfp-close').click();
                $('#notif_berhasil').show();
                $('#notif_berhasil').delay(3000).fadeOut();
                setTimeout(function(){ 
                    window.location = "<?php echo base_url(); ?>admin";
                }, 3000);
            }
        });
    });

});

function ubah_data(id_admin){
    $('#btn_form').addClass('holder-active');
    $('#btn_panel').removeClass('holder-active');
    $('#btn_simpan').hide();
    $('#btn_ubah').show();
    $.ajax({
        url:'<?php echo base_url();?>admin/tampilDatabyId',
        data:{id_admin:id_admin},
        // id_admin sebelah kiri harus sesuai dengan php yang di kontroller
        // id_admin sebelah kanan sesuai dengan parameter di fungsi java script atasnya
        type:"POST",
        dataType:"json",
        success:function(result){
            $('#id_ubah').val(id_admin);
            $('#nama').val(result['nama_admin']);
            $('#username').val(result['username']);

        }
    });
}

function hapus_data(id_admin){
    $('#btn_form').removeClass('holder-active');
    $('#btn_panel').addClass('holder-active');
    $.ajax({
        url:'<?php echo base_url();?>admin/tampilDatabyId',
        data:{id_admin:id_admin},
        // id_admin sebelah kiri harus sesuai dengan php yang di kontroller
        // id_admin sebelah kanan sesuai dengan parameter di fungsi java script atasnya
        type:"POST",
        dataType:"json",
        success:function(result){
            $('#id_hapus').val(id_admin);
            $('#msg_hapus').html('apakah user <b>'+result['nama_admin']+'</b> ingin dihapus?');

        }
    });
}
</script>

<div class="row table-layout" id="modal-content" style="display:none;">
    <div class="col-xs-4 br-a br-light bg-light p30">
        <div class="row">
            <a class="holder-style p15 mb20" href="#modal-form" id="btn_form">
                <span class="fa fa-pencil-square-o fs40 holder-icon"></span>
                <br> Form
            </a>
             <a class="holder-style p15 mb20" href="#modal-panel" id="btn_panel">
                <span class="fa fa-map-marker fs40 holder-icon"></span>
                <br> Panel
            </a>
        </div>
    </div>
</div>

<div class="alert alert-success alert-dismissable" id="notif_berhasil">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <i class="fa fa-check pr10"></i>
    <strong>Berhasil!</strong> Data sudah disimpan.
</div>

<?php if($this->session->flashdata('hapus')){?>
<div class="alert alert-success alert-dismissable" id="notif_hapus" >
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <i class="fa fa-trash pr10"></i>
    <strong>Berhasil!</strong> Data berhasil dihapus.
</div>
<?php }?>
<div class="panel panel-visible">
    <div class="panel-heading">
        <div class="panel-title hidden-xs">
            <span class="glyphicon glyphicon-tasks"></span>Manajemen Data Admin</div>
    </div>

    <div class="panel-body pn">
        <div class="ph10 animation-switcher" >
            <button type="button" class="btn btn-primary mt10 mb10" id="btn_tambah_data" data-effect="mfp-zoomIn">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>        
    </div>

    <div class="panel-body pn">
        <table class="table table-striped table-bordered table-hover" id="datatable2" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Tanggal Daftar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor=0;
                foreach ($data as $key => $value) {
                    $nomor++;
                   ?>
                   <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $value->nama_admin;?></td>
                    <td><?php echo $value->username;?></td>
                    <td><?php echo $value->tgl_daftar;?></td>
                    <td>
                       
                        <div class="btn-group animation-switcher">
                            <button class="btn btn-success" type="button" data-effect="mfp-zoomIn" onclick="ubah_data(<?php echo $value->id_admin;?>);">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger " type="button" data-effect="mfp-zoomIn" onclick="hapus_data(<?php echo $value->id_admin;?>);">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    
                    </td>
                    
                </tr>
                   <?php
                }

                ?>
                
            </tbody>
        </table>
    </div>
</div>

<br><br>
<!-- Admin Form Popup -->
<div id="modal-form" class="popup-basic admin-form mfp-with-anim mfp-hide">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"><i class="fa fa-rocket"></i>Tambah Data Admin</span>
        </div>
        <!-- end .panel-heading section -->

        <form method="post" action="" id="form_tambah">
            <input type="hidden" name="id_ubah" id="id_ubah" value="">
            <div class="panel-body p25">
                <div class="section row">
                    <div class="col-md-6">
                        <label for="nama" class="field prepend-icon">
                            <input type="text" name="nama" id="nama" class="gui-input" placeholder="nama...">
                            <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                            </label>
                        </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-6">
                        <label for="username" class="field prepend-icon">
                            <input type="text" name="username" id="username" class="gui-input" placeholder="username...">
                            <label for="username" class="field-icon"><i class="fa fa-user"></i>
                            </label>
                        </label>
                    </div>
                    <!-- end section -->

                </div>
                <!-- end section row section -->

                <div class="section row">
                    <div class="col-md-6">
                        <label for="password" class="field prepend-icon">
                            <input type="password" name="password" id="password" class="gui-input" placeholder="password...">
                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                            </label>
                        </label>
                    </div>
                    <!-- end section -->

                    <div class="col-md-6">
                        <label for="tgl_daftar" class="field prepend-icon">
                            <input type="tgl_daftar" name="tgl_daftar" id="tgl_daftar" class="gui-input" value="<?php echo date('d-m-Y');?>" readonly>
                            <label for="website" class="field-icon"><i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                    <!-- end section -->

                </div>
                <!-- end section row section -->

            </div>
            <!-- end .form-body section -->

            <div class="panel-footer">
                <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                <button type="button" class="btn btn-success" id="btn_ubah">Ubah</button>
            </div>
            <!-- end .form-footer section -->
        </form>
    </div>
    <!-- end: .panel -->
</div>
 <!-- Panel popup -->
<div id="modal-panel" class="popup-basic bg-none mfp-with-anim mfp-hide">
    <form action="<?php echo $url_hapus;?>" method="post">
        <input type="hidden" name="id_hapus" id="id_hapus" value="">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-trash"></i>
                </span>
                <span class="panel-title"> Konfirmasi Hapus</span>
            </div>
            <div class="panel-body">
                <h3 class="mt5" id="msg_hapus"></h3>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-danger" type="submit">Hapus</button>
            </div>
        </div>
    </form>
</div>