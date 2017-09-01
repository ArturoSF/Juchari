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
        <?php include 'partials/header.php'; ?>
        <div class="header-img"></div>
        <br><br>
        <main class="container bg-brown-alpha txt-white border-radius padding-30 m-b-70">
            <h2>INFORMACIÓN</h2>
            <p>
                Actualmente las Tecnologías para la información y comunicación,  las podemos encontrar en nuestra vida diaria. 

                Estas herramientas son necesarias para la difusión y para la consolidación del proceso cultural y mantenimiento de ella. El municipio de Paracho cuenta con 9 comunidades; Nurio, Urapicho, Cheranastico, Ahuiran, Pomacuarán, Aranza, Quinceo, Arato  y el mismo Paracho.  Dichos lugares han sido creadores de artesanías como rebozos, prendas con sus tejidos hechos a mano, y artesanías con distintos métodos de elaboración como lo es el torno. 

                Específicamente en el municipio de Paracho una de las principales fuentes de trabajo son el trabajo artesanal; el torno, la patacua, la construcción de guitarras a mano, ya sea en tamaño normal o de juguete (yuca), instrumentos construidos en miniatura,  tejidos de rebozos y fajas de algodón en telar de cintura, tejidos de punto de cruz, elaboración de huanengos  y nahuas. 

                Estos oficios los elaboran mujeres, hombres, familias. Existen talleres de guitarras familiares, o de torno. Así como grupos de mujeres quienes se organizan para tejer rebozos de patacua o de bolita. Algunas de ellas son familia o conocidas. 

                El tejido de punto de cruz también es elaborado por mujeres de distintas edades. En algunas comunidades no es muy común que los hombres hagan este tipo de trabajo.  Normalmente los hombres son los que se dedican hacer artesanía en torno o fabricar guitarras. 

                Todo el trabajo artesanal se puede apreciar  los domingos de tianguis en el municipio de Paracho donde los artesanos asisten para ofrecer sus productos.

                De esta forma,  la  página pretende difundir, reconocer y valorizar todo el trabajo artesanal que se maneja en este municipio. 

                *La traducción de esta página es una traducción libre a cargo de la docente  Eduvijes Tomás Campanur de la comunidad de Cheranastico municipio de Paracho, que habla y escribe la lengua p´urhépecha. 
            </p>
            <h2>Fuentes consultadas:</h2>
            <p>
                <ul>
                    <li>1.  http://www.michoacan.gob.mx/municipios</li>
                    <li>2.  http://www.michoacan.gob.mx/cultura</li>
                    <li>3.  http://www.michoacan.gob.mx/turismo</li>
                    <li>4.  http://www.ccu.umich.mx/mich/mich-inic.html</li>
                    <li>5.  http://www.municipiosmich.gob.mx</li>
                    <li>6.    http://mexico.pueblosamerica.com</li>
                    <li>7. https://www.youtube.com/channel/UC_CuI8bf4yLbYIXOUC8CAvg</li>
                    <li>8.https://www.facebook.com/urapicho/photos/a.407244769404029.1073741827.224255061036335/495808730547632/?type=3&theater</li>
                    <li>9. https://www.youtube.com/results?search_query=urapicho+artesanias</li>
                    <li>10.http://4.bp.blogspot.com/fHEDS8FNf7s/UG5jgISwHVI/AAAAAAAAAR0/SSNwbnDWyOI/s1600/CapillaPomocuaran.jpg</li>
                    <li>11. http://www.uruapanvirtual.com/pomacuaran-michoacan</li>
                    <li>12.  http://mexico.pueblosamerica.com/i/quinceo/</li>
                    <li>13.  http://siglo.inafed.gob.mx/enciclopedia/EMM16michoacan/municipios/16065a.html</li>
                    <li>14. https://www.madrigaldelasaltastorres.es/hermanamientos/paracho/</li>
                    <li>15. https://www.gob.mx/cms/uploads/attachment/file/45444/Michoacan_065.pdf</li>
                    <li>16.  http://agenciainfomania.com/2015/08/primera-produccion-textilera-de-urapicho-ejemplo-de-las-mujeres-purepechas/</li>
                    <li>17.  https://sic.cultura.gob.mx/ficha.php?table=festividad&table_id=1122</li>
                    <li>18.   Romero Flores, Jesús: Nomenclatura Geográfica de Michoacán, Morelia, Mich., Investigaciones Lingüísticas, 1974, 52 págs.</li>
                    <li>19. Entrevistas a los artesanos de las diferentes comunidades de Paracho Michoacán.</li>
                </ul>

            </p>
        </main>
        <?php include 'partials/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/juchari.js"></script>
    </body>
</html>