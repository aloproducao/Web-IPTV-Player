<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="TeLaSe">
      <title>WebTV IPTV Player</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
        </script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/mokoshalb/clappr-ads/ads.js"></script>
       <script type="text/javascript" src="js/player-error.js"></script>
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <!--<a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" src="img/logo.png"></a>-->
          <!--Navbar Search -->
         <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control search" onkeyup="bait(this)" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light sort" type="button">
                  <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <li class="nav-item mx-1">
               <a class="nav-link" href="http://iptvde.mypressonline.com/">
               <i class="fas fa-plus-circle fa-fw"></i>
               </a>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
          <div id="lists">
         <!-- Sidebar -->
         <ul id="list" class="sidebar navbar-nav list">
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cloud.navve.tv:8080/live/1234.m3u8" href="javascript:void(0);">National GEO People</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae/hls/nat_geo/04.m3u8" href="javascript:void(0);">National GEO</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae/hls/nat_geo_wild/04.m3u8" href="javascript:void(0);">National GEO Wild</a>
            </li>
			<li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh3.tvanywhere.ae/hls/docubox/04.m3u8" href="javascript:void(0);">Docu Box</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fash1043.cloudycdn.services/slive/_definst_/ftv_paris_adaptive.smil/chunklist_b4500000_t64MTA4MHA=.m3u8" href="javascript:void(0);">Fashion Paris</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fash1043.cloudycdn.services/slive/ftv_pg13_adaptive.smil/chunklist_b4700000_t64MTA4MHA=.m3u8" href="javascript:void(0);">Fashion Destination</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fash1043.cloudycdn.services/slive/_definst_/ftv_midnite_secrets_adaptive.smil/chunklist_b4700000_t64MTA4MHA=.m3u8" href="javascript:void(0);">Fashion Midnight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3cs5y5559s57s.cloudfront.net/live/channelk.m3u8" href="javascript:void(0);">Channel K</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://yangon1.akamaized.net/live/19daddcf-0f46-4a14-988e-14bc15f03298/prod/playlist.m3u8" href="javascript:void(0);">5Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://220.158.149.14:9999/live/TV00000000000000000089@HHZT;" href="javascript:void(0);">MRTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://220.158.149.14:9999/live/TV00000000000000000092@HHZT;" href="javascript:void(0);">MizzimaTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://220.158.149.14:9999/live/TV00000000000000000091@HHZT;" href="javascript:void(0);">Channel-9</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://104275ooyala-lh.akamaihd.net/i/forevergroup_02@449366/master.m3u8" href="javascript:void(0);">MRTV-4</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://104275ooyala-lh.akamaihd.net/i/forevergroup_01@449365/master.m3u8" href="javascript:void(0);">Mahar Bawdi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://104275ooyala-lh.akamaihd.net/i/forevergroup_03@449367/master.m3u8" href="javascript:void(0);">Channel 7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://maharlive.b-cdn.net/stream.m3u8" href="javascript:void(0);">Mahar</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://220.158.149.14:9999/live/TV00000000000000000090@HHZT;" href="javascript:void(0);">Mitv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1a.v2h-cdn.com/appt7/MVM.stream_720p/chunklist_w2034544246.m3u8" href="javascript:void(0);">MVTV </a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://203.81.84.130/hls/mwd/index.m3u8" href="javascript:void(0);">MWD Variety</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://203.81.84.130/hls/mwd_variety/index.m3u8" href="javascript:void(0);">MWD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge-stream-07.otv.co.th./livestream/Hluttaw.stream/playlist.m3u8" href="javascript:void(0);">MRTV Hluttaw</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge-stream-07.otv.co.th/livestream/Reader-Channel.stream/playlist.m3u8" href="javascript:void(0);">Reader Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge-stream-07.otv.co.th./livestream/MNTV.stream/playlist.m3u8" href="javascript:void(0);">MNTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge-stream-07.otv.co.th./livestream/MRTV-Entertainment.stream/playlist.m3u8" href="javascript:void(0);">MRTV Entertainment</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge-stream-07.otv.co.th/livestream/DVB.stream/playlist.m3u8" href="javascript:void(0);">DVB</a>
            </li>
         </ul>
         </div>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="top-mobile-search">
                  <div class="row">
                     <div class="col-md-12">
                        <form class="mobile-search">
                           <div class="input-group">
                             <input type="text" placeholder="Search for..." class="form-control">
                               <div class="input-group-append">
                                 <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                               </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                            <div id="TeLaSe"></div>
                            <script>
                                var playerElement = document.getElementById("TeLaSe");
                                var player = new Clappr.Player({
                                    source: "",
                                    //mimeType: 'application/x-mpegURL',
                                    width: '100%',
                                    height: 'calc(100vh - 100px)',
                                    autoPlay: false,
                                    watermark: "",
                                    watermarkLink: "h",
                                    position: 'bottom-right',
                                    mediacontrol: {seekbar: "#00FF00", buttons: "#FFFFFF"},
                                    mute: false,
                                    gaAccount: "UA-69771681-1",
                                    disableErrorScreen: true, // Disable the internal error screen plugin
                                    plugins: [ChromecastPlugin,ErrorPlugin,LevelSelector,ClapprAds],
                                    chromecast: {
                                        appId: "9DFB77C0",
                                        contentType: "video/m3u8",
                                        media: {
                                            type: ChromecastPlugin.None,
                                            title: "IPTV",
                                            subtitle: "IPTV Streaming Service"
                                        }
                                    },
                                    errorPlugin: {
                                        onRetry: function(e) {
                                        }
                                      },
                                    disableVideoTagContextMenu: true,
                                    playbackNotSupportedMessage: 'Your browser is not supported.'
                                });
                                player.attachTo(playerElement);
                            </script>
                     </div>
                  </div>
               </div>
               <hr class="mt-0">
            </div>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
</html>
