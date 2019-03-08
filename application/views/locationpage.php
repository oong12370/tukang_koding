<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Location - Tukang Koding</title>
  
  <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.192679,106.534238),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
</head>
<body>
<div id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Location Tukang Koding</h1>
          <p>Prm. Puriasih Block H No.10 <br>Kab. Tangerang -Banten</p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
  <div id="googleMap" style="width:100%;height:380px;"></div>
</div>
</div>
</div>
</body>
</html>