<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Juchari Utakatecha</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <script src="https://use.fontawesome.com/20384d26e0.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/juchari.css">
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script>
            var data =<?php echo json_encode($summaries)?>;
        </script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
            browser</a> to improve your experience.
        </p>
        <![endif]-->
        <div id="detailModal" class="bg-modal-hide" onclick="closeDetailModal()">
            <div id="detailBox" class="bg-modal-content-close">
                <div class="content-modal-hide">
                    <div class="col-sm-12 m-t-15 m-b-15 title-bar">
                        <h1 class="col-sm-10 modal-header-title"></h1>
                        <i class="fa fa-times fa-2x modal-header-close col-sm-2" aria-hidden="true" onclick="closeDetailModal()"></i>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12 col-md-7 modal-image"></div>
                        <div class="col-sm-12 col-md-5 modal-text">
                            <div class="modal-resume">
                                <div class="dynamic-text"></div>
                                <div class="modal-more" onclick="openLink(5)"><?php echo $this->lang->line('more'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 m-t-15 m-b-15 modal-submenu">
                        <div onclick="openLink(0)"><?php echo $this->lang->line('sub_1'); ?></div>
                        &nbsp;-&nbsp;&nbsp;<div onclick="openLink(1)"><?php echo $this->lang->line('sub_2'); ?></div>
                        &nbsp;-&nbsp;&nbsp;<div onclick="openLink(2)"><?php echo $this->lang->line('sub_3'); ?></div>
                        &nbsp;-&nbsp;&nbsp;<div onclick="openLink(3)"><?php echo $this->lang->line('sub_4'); ?></div>
                        &nbsp;-&nbsp;&nbsp;<div onclick="openLink(4)"><?php echo $this->lang->line('sub_5'); ?></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include 'partials/header.php'; ?>

        <div id="banner" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1" class=""></li>
                <li data-target="#banner" data-slide-to="2" class=""></li>
                <li data-target="#banner" data-slide-to="3" class=""></li>
                <li data-target="#banner" data-slide-to="4" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?=base_url()?>assets/img/slider/2.jpg">
                </div>
                <div class="item"><img src="<?=base_url()?>assets/img/slider/6.jpg" alt=""></div>
                <div class="item"><img src="<?=base_url()?>assets/img/slider/4.jpg" alt=""></div>
                <div class="item"><img src="<?=base_url()?>assets/img/slider/1.jpg" alt=""></div>
                <div class="item"><img src="<?=base_url()?>assets/img/slider/5.jpg" alt=""></div>
                
            </div>
            <a class="left carousel-control" href="#banner" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#banner" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

        <nav class="max-size-map">
            <img src="<?php echo base_url(); ?>assets/img/mapa_paracho.svg" alt="">
            <div class="map">
                <div class="map-item urapicho" onclick="openDetailModal(9)"></div>
                <div class="map-item nurio" onclick="openDetailModal(5)"></div>
                <div class="map-item ahuiran" onclick="openDetailModal(1)"></div>
                <div class="map-item arato" onclick="openDetailModal(3)"></div>
                <div class="map-item pomacuaran" onclick="openDetailModal(7)"></div>
                <div class="map-item paracho" onclick="openDetailModal(6)"></div>
                <div class="map-item cheranastico" onclick="openDetailModal(4)"></div>
                <div class="map-item aranza" onclick="openDetailModal(2)"></div>
                <div class="map-item quinceo" onclick="openDetailModal(8)"></div>
            </div>
        </nav>

        <nav class="middle-size-map">
            <div class="display-flex">
                <div class="flex-3">
                    <div class="square-item cm_9" onclick="openDetailModal(9)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item cm_5" onclick="openDetailModal(5)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                    <div class="square-item cm_1" onclick="openDetailModal(1)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                </div>
                <div class="flex-3">
                    <div class="square-item cm_3" onclick="openDetailModal(3)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                    <div class="square-item cm_7" onclick="openDetailModal(7)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item cm_6" onclick="openDetailModal(6)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                </div>
                <div class="flex-3">
                    <div class="square-item cm_4" onclick="openDetailModal(4)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item cm_2" onclick="openDetailModal(2)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                    <div class="square-item cm_8" onclick="openDetailModal(8)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                </div>

                <div class="flex-2">
                    <div class="square-item cm_9" onclick="openDetailModal(9)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item cm_5" onclick="openDetailModal(5)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                </div>
                <div class="flex-2">
                    <div class="square-item cm_1" onclick="openDetailModal(1)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                    <div class="square-item cm_3" onclick="openDetailModal(3)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                </div>
                <div class="flex-2">
                    <div class="square-item cm_7" onclick="openDetailModal(7)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item cm_6" onclick="openDetailModal(6)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                </div>
                <div class="flex-2">
                    <div class="square-item cm_4" onclick="openDetailModal(4)">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                    <div class="square-item cm_2" onclick="openDetailModal(2)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                </div>
                <div class="flex-2">
                    <div class="square-item cm_8" onclick="openDetailModal(8)">
                        <div class="image-bg _0"><span></span></div>
                    </div>
                    <div class="square-item">
                        <div class="image-bg _1"><span></span></div>
                    </div>
                </div>
            </div>
        </nav>

        <?php include 'partials/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/juchari.js"></script>

    </body>
</html>