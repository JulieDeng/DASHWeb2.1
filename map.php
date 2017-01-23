<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css' rel='stylesheet' />
<link rel="stylesheet" href="css/master.css">
<div class="home-wrap">
  <header>
      <div class="header-position">
          <h1 class="logo">RISC</h1>
          <nav class="site-nav">
              <ul>
                  <li><a href="index.php">About</a>
                  </li>
                  <li><a href="map.php">Atlas</a>
                  </li>
                  <li><a href="team.php">Team</a>
                  </li>
                  <li><a href="#contact">Contact</a>
                  </li>
              </ul>
          </nav><a href="mailto:david.s@econ.berkeley.edu" class="email-link">+email us</a>
          <div class="mobile-nav-toggle"><span></span>
          </div>
      </div>
  </header>
  <div class="home-sections">



    <style>
      .stylemap { position:absolute; top:0; bottom:0; left:10.5%; width:100%; }
    </style>
    </head>

    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js'></script>

    <div id ="map" class = "stylemap"></div>


    <script>
    <?php include "get_data.php" ?>

    L.mapbox.accessToken = 'pk.eyJ1IjoianVsaWVkZW5nIiwiYSI6ImY5MGU3MTcwZTYyYmZjZjczMTk5MzU0NjQ3MDAyNmMyIn0.5P_srsXjYo0VfIhNHmZ56A';
    var map = L.mapbox.map('map', 'mapbox.streets', {
      scrollWheelZoom: false
    })
        .setView([2, 60], 3);
    var markerClusters = L.markerClusterGroup();
    for ( var i = 0; i < markers.length; ++i ){

      var m = L.marker( markers[i]);

      markerClusters.addLayer( m );
    }



    map.addLayer( markerClusters );

    </script>

  </div>
</div>
