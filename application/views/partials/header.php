<!--[if lt IE 8]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.
</p>
<![endif]-->
<header class="row bg-blue max-size">
    <div class="container">
        <div class="row">
            <div class="col-md-3 title-header text-uppercase"><a href="<?php echo base_url(); ?>">Juchari Utakatecha</a>
                <i class="fa fa-bars fa-2x open-menu"></i>
            </div>
            <div class="col-md-9 menu-content">
                <div class="menu-item text-uppercase"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('menu_1'); ?></a></div>
                <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_2'); ?></a></div>
                <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_3'); ?></a></div>
                <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_4'); ?></a></div>
                <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_5'); ?></a></div>
                <div class="menu-item text-uppercase"><a href="/index.php/informacion"><?php echo $this->lang->line('menu_6'); ?></a></div>
                <div class="menu-item dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="actual-lang">
                        <?php if ($this->session->userdata('site_lang') == 'spanish' || empty($this->session->userdata('site_lang'))) {
                            echo 'Español';
                        } else {
                            echo 'P\'urhépecha';
                        } ?>
                    </span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>
                            <a href="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish';">Español</a>
                        </li>
                        <li>
                            <a href="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/purhepecha';">P'urhépecha</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</header>
<header class="row bg-blue middle-size">
    <div class="col-md-12 title-header text-uppercase"><a href="<?php echo base_url(); ?>">Juchari Utakatecha</a> <span class="open-menu"><i class="fa fa-bars"></i></span>
    </div>
    <div class="col-md-12 menu-content">
        <div class="menu-item text-uppercase"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('menu_1'); ?></a></div>
        <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_2'); ?></a></div>
        <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_3'); ?></a></div>
        <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_4'); ?></a></div>
        <div class="menu-item text-uppercase"><a href="#"><?php echo $this->lang->line('menu_5'); ?></a></div>
        <div class="menu-item text-uppercase"><a href="/index.php/informacion"><?php echo $this->lang->line('menu_6'); ?></a></div>
        <div class="menu-item dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="actual-lang">
                <?php if ($this->session->userdata('site_lang') == 'spanish' || empty($this->session->userdata('site_lang'))) {
                    echo 'Español';
                } else {
                    echo 'P\'urhépecha';
                } ?>
            </span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li>
                    <a href="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish';">Español</a>
                </li>
                <li>
                    <a href="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/purhepecha';">P'urhépecha</a>
                </li>
            </ul>
        </div>
    </div>
</header>