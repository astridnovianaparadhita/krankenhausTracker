<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 ie lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie lt-ie9 lt-ie8 gt-ie6" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie lt-ie9 gt-ie6 gt-ie7" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie gt-ie6 gt-ie7 gt-ie8" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="goodie no-js" lang="en"> <!--<![endif]-->
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <?php
    include ('koneksi.php');
    $sql = 'SELECT * FROM rumah_sakit';
    $result = mysql_query($sql);
    ?>
    <html>
        <head>

            <title>Pencarian Rumah Sakit Terdekat</title>
            <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

            <meta name="description" content="Google Maps API V3: Custom Directions Panel" />
            <meta name="keywords" content="Google Maps API V3, Custom Directions Panel, jQuery, jQuery tutorials, thewebstorebyg wordpress code blog" />
            <meta name="author" content="Giri Jeedigunta - thewebstorebyg" />

            <script type="text/javascript" src="assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
            <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
            <link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

        </head>
        <body>
            <div id="mapCanvas">&#160;</div>
            <div id="directionsPanel" class="col-lg-3 col-xs-5">
                <hr>
                <button href="#geoLocation" id="useGPS" class="btn btn-primary btn-block" type="submit">Gunakan Lokasi Saya</button>
                <!--                <a href="#geoLocation" id="useGPS">Gunakan Lokasi Saya</a>-->
                <p class="atau">[ATAU]</p>
                <div class="directionInputs">
                    <form class="form-horizontal">
                        <div class="form-group" style="padding-left: 15px; padding-right: 15px">
                            <label class="control-label">Lokasi Awal</label>
                            <div class="control">
                                <input type="text" value="" id="dirSource" class="form-control input-sm"/>
                            </div>
                        </div>

                        <div class="form-group" style="padding-left: 15px; padding-right: 15px">
<!--                        <p><label>B</label><input type="text" value="" id="dirDestination" /></p>-->
                            <label class="control-label">Rumah Sakit Tujuan</label>
                            <div class="control">
                                <select id="dirDestination" class="form-control" style="border-radius: 0;">
                                    <?php while ($hasil = mysql_fetch_array($result)) { ?>
                                        <option value="<?php echo $hasil['nama']; ?>"><?php echo $hasil['nama']; ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <hr>
                        <button href="#getDirections" id="getDirections" class="btn btn-success btn-block">Get Directions</button>
                        <button href="#reset" id="paneReset" class="btn btn-danger btn-block">Reset</button>
                        <!--                        <a href="#reset" id="paneReset">Reset</a>-->
                    </form>	
                </div>
                <div id="directionSteps">
                    <p class="msg">Direction Steps Will Render Here</p>
                </div>
                <button href="#toggleBtn" id="paneToggle" class="btn btn-toolbar" style="border-radius: 0;">&lt;</button>
            </div>
            <script type="text/javascript" src="assets/js/style.js"></script>

        </body>
    </html>