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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/images-grid.css">
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
                                <div class="modal-more"><?php echo $this->lang->line('more'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 m-t-15 m-b-15 modal-submenu">
                        <a href="javascript:openLink(0)"><?php echo $this->lang->line('sub_1'); ?></a>
                        &nbsp;-&nbsp;&nbsp;<a href="javascript:openLink(1)"><?php echo $this->lang->line('sub_2'); ?></a>
                        &nbsp;-&nbsp;&nbsp;<a href="javascript:openLink(2)"><?php echo $this->lang->line('sub_3'); ?></a>
                        &nbsp;-&nbsp;&nbsp;<a href="javascript:openLink(3)"><?php echo $this->lang->line('sub_4'); ?></a>
                        &nbsp;-&nbsp;&nbsp;<a href="javascript:openLink(4)"><?php echo $this->lang->line('sub_5'); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'partials/header.php'; ?>

        <div class="header-img"></div>
        <br />
        <nav class="container bg-brown-alpha txt-white border-radius padding-30 m-b-70">
            <section id="main">
                <h3><?php echo $summary['title'] ?></h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-12 col-md-5">
                            <img align="left" src="<?php echo $summary['image']; ?>" alt="<?php echo $summary['name']; ?>">
                        </div>
                        <div class="summary">
                            <?php echo $summary['body'] ?>
                        </div>
                    </div>
                </div>
            </section>
            <hr size="3" class="bg-beige border-radius" />
            <section id="videos">
                <h3><?php echo $this->lang->line('sub_1'); ?></h3>
                <div class="row">
                    <?php foreach ($videos as $video) {
                        echo $video->video;
                    } ?>
                </div>
            </section>
            <?php if (!empty($galeria)) { ?>
                <hr size="3" class="bg-beige border-radius" />
                <section id="galeria">
                    <h3><?php echo $this->lang->line('sub_2'); ?></h3>
                    <div id="gallery7"></div>
                </section>
            <?php } ?>
            <?php if (!empty($audio)) { ?>
                <hr size="3" class="bg-beige border-radius" />
                <section id="audio">
                    <h3><?php echo $this->lang->line('sub_3'); ?></h3>
                </section>
            <?php } ?>
            <?php if (!empty($festividades)) { ?>
                <hr size="3" class="bg-beige border-radius" />
                <section id="festividades">
                    <h3><?php echo $this->lang->line('sub_4'); ?></h3>
                    <br />
                    <div class="summary">
                        <?php echo $festividades['body'] ?>
                    </div>
                </section>
            <?php } ?>
            <?php if (!empty($artesanos)) { ?>
                <hr size="3" class="bg-beige border-radius" />
                <section id="artesanos">
                    <h3><?php echo $this->lang->line('sub_5'); ?></h3>
                    <br />
                    <div class="summary">
                        <?php echo $artesanos['body'] ?>
                    </div>
                </section>
            <?php } ?>
        </nav>
        <?php include 'partials/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/js/images-grid.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/juchari.js"></script>
        <?php if (!empty($galeria)) { ?>
            <script>
                var images = <?php echo json_encode($galeria)?>;
                $(document).ready(function () {
                    $('#gallery7').imagesGrid({
                        images: images,
                        align: true,
                        getViewAllText: function (imgsCount) {
                            return 'View all'
                        }
                    });
                });
            </script>
        <?php } ?>

    </body>
</html>