<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Store locator with Panel</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js">
    </script>
    <script src="{{ asset('store/store-locator.min.js') }}"></script>
    <script src="{{ asset('store/places.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('store/store-locator.css') }}">
    <style>
      body { font-family: sans-serif; }
      #map-canvas, #panel { height: 500px; }
      #panel { width: 300px; float: left; margin-right: 10px; }
      #panel .feature-filter label { width: 130px; }
      p.attribution, p.attribution a { color: #666; }
    </style>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-12846745-20']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATt8YZNu3NjbG6dvkfF5M2KN73B9UxS6Q&libraries=places&**callback=initMap**" async defer></script>
  </head>
  <body>
    <h1>Places API</h1>
    <div id="panel"></div>
    <div id="map-canvas"></div>
  </body>
</html>
