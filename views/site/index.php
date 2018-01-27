<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
   integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
   crossorigin=""></script>
   <div id="mapid"></div>
   <style type="text/css">
       #mapid { height: 400px; }
   </style>
   <script type="text/javascript">
       var mymap = L.map('mapid').setView([-7.821723814835308, 110.35569061730952], 15);
   L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWlxYmFscyIsImEiOiJjamN4MHQ4N3Iwa2FhMnJuc3BtZGx6eXpnIn0.yqSZ8uwgCFUTPoVeWwSYYQ', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.satellite',
    accessToken: 'pk.eyJ1IjoibWlxYmFscyIsImEiOiJjamN4MHQ4N3Iwa2FhMnJuc3BtZGx6eXpnIn0.yqSZ8uwgCFUTPoVeWwSYYQ'
}).addTo(mymap);
   </script>

</div>
