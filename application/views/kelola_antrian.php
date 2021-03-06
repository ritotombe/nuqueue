<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard CS</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo base_url(); ?>assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?php echo base_url(); ?>assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/global/foundation-datepicker-master/css/foundation-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <img src="<?php echo base_url(); ?>assets/layouts/layout2/img/LogoKliniks.png" alt="logo" class="logo-default" />
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN PAGE ACTIONS -->
            <!-- DOC: Remove "hide" class to enable the page header actions -->
            <!-- END PAGE ACTIONS -->
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                        <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->



                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> <?php
                                                                                $nama_cs = $this->session->userdata('fullname');
                                                                                echo $nama_cs;
                                                                                ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo site_url('auth/keluar'); ?>">
                                        <i class="icon-key"></i>Keluar</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- END SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <?php require_once('sidebar_cs.php'); ?>

                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->

            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <!-- END THEME PANEL -->
                <?php
                foreach ($data_poli->result() as $key) {
                    $nama_poli = $key->nama_poliklinik;
                    $id_poli = $key->id_poliklinik;
                    $kode_poli = $key->BPJS_kode_poli;
                }

                foreach ($data_rs->result() as $key) {
                    $nama_rs = $key->nama_rumah_sakit;
                }

                foreach ($data_jadwal->result() as $key) {
                    $id_jadwal = $key->id_jadwal;
                    $jammulai_poli = $key->jam_mulai;
                    $jamselesai_poli = $key->jam_selesai;
                    $nama_dokter = $key->nama_dokter;
                }
                ?>

                <h3 style="margin-top:0px;">Kelola Antrian <?php echo $nama_poli; ?> (<?php echo $jammulai_poli . ' - ' . $jamselesai_poli ?>) di <?php echo $nama_rs ?> oleh <?php echo $nama_dokter ?></h3>


                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo site_url('dashboardCS/dashboard_rs'); ?>">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dashboardCS/kelola_antrian'); ?>">Pilih Poliklinik</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dashboardCS/kelola_antrian_poli'); ?>/<?php echo $id_poli ?>">Pilih Jadwal Poliklinik</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Kelola Antrian <?php echo $nama_poli; ?></span>
                        </li>
                    </ul>

                </div>

                <?php require_once('modals_antrian.php'); ?>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light tasks-widget ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Daftar Antrian</span>
                                </div>
                                <div class="actions">
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="task-content" style="overflow-y: scroll;">
                                    <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                        <!-- START TASK LIST -->
                                        <ul class="task-list">
                                            <?php


                                            if (empty($data_list_antrian->result())) {
                                                echo "Antrian Kosong";
                                            } else {
                                                $statAntrian = false;
                                                foreach ($data_list_antrian->result() as $key) {
                                                    if ($statAntrian == false) {
                                                        $antrian_selanjutnya = $key->no_antrian;
                                                        $statAntrian = true;
                                                    }


                                            ?>
                                                    <li>
                                                        <div class="task-title">
                                                            <span class="task-title-sp"> <?php echo $key->no_antrian . ' ' . $key->nama_pasien ?></span>
                                                        </div>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </ul>
                                        <!-- END START TASK LIST -->
                                    </div>
                                </div>
                                <div class="task-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light tasks-widget ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Sedang Diperiksa : <?php
                                                                                                                $diperiksa = NULL;
                                                                                                                if (empty($data_antrian_saat_ini->result())) {
                                                                                                                    echo "-";
                                                                                                                } else {
                                                                                                                    foreach ($data_antrian_saat_ini->result() as $key) {
                                                                                                                        $diperiksa = $key->no_antrian;
                                                                                                                        echo $key->no_antrian . ' ' . $key->nama_pasien;
                                                                                                                    }
                                                                                                                }
                                                                                                                ?> </span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">

                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body text-center">
                                <form action="<?php echo site_url('dashboardCS/panggil_antrian') ?>" method="post">
                                    <input type="hidden" name="id_poli" value="<?php echo $id_poli; ?>" />
                                    <input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>" />

                                    <input type="hidden" name="no_antrian_selanjutnya" value="<?php if (!empty($antrian_selanjutnya))
                                                                                                    echo $antrian_selanjutnya; ?>" />

                                    <button type="submit" role="button" class="btn btn-lg btn-primary">Panggil Antrian Selanjutnya</button>
                                </form>
                                <br><button id="recall" type="button" name="button" class="btn btn-lg btn-info">Panggil Lagi</button>
                                <br><br>
                                <button type="button" name="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                                    <div class="glyphicon glyphicon-plus"></div> Daftar Antrian
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END CONTENT BODY -->
            </div>

            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> RS Sinar Kasih, 2020
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <!-- BEGIN QUICK NAV -->
            <!-- END QUICK NAV -->
            <!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
            <!-- BEGIN CORE PLUGINS -->

            <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="<?php echo base_url(); ?>assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/global/foundation-datepicker-master/js/foundation-datepicker.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#nama_pasien').hide();
                    $("#no_nik_lama").on("input", function() {
                        $("#btnPasienLama").prop('disabled', true);
                        $('#nama_pasien').hide();
                        if ($("#no_nik_lama").val().length == 8 || $("#no_nik_lama").val().length == 16) {
                            $("#btnPasienLama").prop('disabled', false);
                            autoFill();
                        }
                    });

                    function autoFill() {
                        var nik = $("#no_nik_lama").val();
                        $.ajax({
                            url: "<?php echo base_url() ?>dashboardCS/autofill",
                            data: "nik=" + nik,
                        }).success(function(data) {
                            var json = data,
                                obj = JSON.parse(json);
                            if (obj.nama_pasien) {
                                $('#nama_pasien').html(obj.nama_pasien + " lahir pada " + obj.tanggal_lahir);
                                $('#nama_pasien').show();
                            } else {
                                $("#btnPasienLama").prop('disabled', true);
                            }
                        });
                    }

                    called = <?php echo $called; ?>;
                    if (called == 1) {
                        recall();
                    }

                    $("#recall").click(function() {
                        recall();
                    });

                    function recall() {
                        var audioFiles = ["<?php echo base_url(); ?>assets/global/wav/antrian.wav"];

                        var noAntrianArray = "<?php echo $diperiksa; ?>".split("-");

                        for (let c of noAntrianArray[0]) {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + c.toLowerCase() + ".wav");
                        }

                        var angka = noAntrianArray[1];

                        if (angka.length == 3) {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(0) + "00.wav"); //400
                            if (angka.charAt(1) == "1" && angka.charAt(2) != "0") { //411
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(1) + "" + angka.charAt(2) + ".wav");
                            } else if (angka.charAt(1) != "0" && angka.charAt(2) == "0") { //410, 420
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(1) + "0.wav");
                            } else if (angka.charAt(1) == "0" && angka.charAt(2) != "0") { //401
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(2) + ".wav");
                            } else if (angka.charAt(1) != "0" && angka.charAt(2) != "0") { //425
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(1) + "0.wav");
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(2) + ".wav");
                            }

                        }

                        if (angka.length == 2) {
                            if (angka.charAt(0) == "1" && angka.charAt(1) != "0") { //11
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(0) + "" + angka.charAt(1) + ".wav");
                            } else if (angka.charAt(0) != "0" && angka.charAt(1) == "0") { //10, 20
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(0) + "0.wav");
                            } else if (angka.charAt(0) != "0" && angka.charAt(0) != "0") { //25
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(0) + "0.wav");
                                audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(1) + ".wav");
                            }

                        }

                        if (angka.length == 1) {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/" + angka.charAt(0) + ".wav");
                        }

                        if (noAntrianArray[0] == "GIG") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_gigi.wav");
                        } else if (noAntrianArray[0] == "INT") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_interna.wav");
                        } else if (noAntrianArray[0] == "ANA") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_anak.wav");
                        } else if (noAntrianArray[0] == "BED") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_bedah.wav");
                        } else if (noAntrianArray[0] == "OBG") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_kandungan.wav");
                        } else if (noAntrianArray[0] == "SAR") {
                            audioFiles.push("<?php echo base_url(); ?>assets/global/wav/poli_saraf.wav");
                        }


                        var audio = document.createElement("audio");
                        var audioIdx = 0;

                        audio.volume = 0.1;

                        audio.addEventListener('ended', function() {
                            audioIdx++;
                            if (audioIdx >= audioFiles.length - 1) {
                                this.volume = 1
                            };

                            if (audioIdx >= audioFiles.length) {
                                localStorage.setItem("panggil", 0);
                            };

                            this.src = audioFiles[audioIdx];
                            this.play();
                        });
                        audio.src = audioFiles[audioIdx];
                        audio.play();
                        localStorage.setItem("panggil", 1);
                    }


                });
            </script>
</body>

</html>