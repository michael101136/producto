<!DOCTYPE html>
<html>
  <head>
    <title>Spaziour visitar templos</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>

          #map {
            height: 100%;
          }
          html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
          </style>
          <script>

          var map;
          var infowindow;
          var marcadores = [
			        ['<a href="{{route("temploChuquinga")}}">VISITAR TEMPLO COLONIAL DE CHUQUINGA 3D</a>',  -14.291548, -73.256193,'{{URL::asset("/img/templosMapa/chuquinga.png")}}'],
			        ['<a href="">VISITAR TEMPLO COLONIAL DE SORAYA 3D</a>',  -14.1645139, -73.3160521,'{{URL::asset("/img/templosMapa/soraya.png")}}'],
			        ['<a href="">VISITAR TEMPLO COLONAIL DE LA VIRGEN DE LAS MERCEDES DE PAMPAMARCA 3D</a>',  -14.4272563,-73.2074832,'{{URL::asset("/img/templosMapa/pampamarca.png")}}'],
			        ['<a href="">VISITAR TEMPLO SAN FELIPE DE MUTCA 3D</a>', -14.214773,-73.3104704,'{{URL::asset("/img/templosMapa/mutca.png")}}']

      		];

          function initMap() 
          {
            var pyrmont = {lat: -14.2915486, lng: -73.256193}; 

            map = new google.maps.Map(document.getElementById('map'), {
              center: pyrmont,
              zoom: 9,
            });
			  var marker, i;
			    var infowindow = new google.maps.InfoWindow();

			      for (i = 0; i < marcadores.length; i++) 
			      {  
			        marker = new google.maps.Marker({
			          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
			          map: map,
			          icon:marcadores[i][3],
			        });

			         google.maps.event.addListener(marker, 'click', (function(marker, i) {
				          return function() {
				            infowindow.setContent(marcadores[i][0]);
				            infowindow.open(map, marker);
				          }
				        })(marker, i));
			       }
          }

       
          </script>
  </head>
  <body>
	    <div id="map">
	    	
	    </div>
		
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbQ8JRicT1bTUYm3laAYGZ-5OtEuLI3Vc&callback=initMap" async defer>
	    </script>

  </body>
  </html>