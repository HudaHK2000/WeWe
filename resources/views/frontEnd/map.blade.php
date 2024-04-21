@extends('layout.masterFrontEnd')
@section('title')
خريطة مع الاتجاهات
@endsection

@section('class_body')
class="preload home1 mutlti-vendor"
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
<style>
  #map {
    height: 500px;
    width: 90%;
    margin: 20px auto;
  }
</style>
@endsection

@section('content')
<div id="map"></div>
@endsection

@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://unpkg.com/leaflet-plugins@1.8.1/dist/L.Control.Geocoder.Nominatim.min.js"></script>
<script>
var orderLatitude = {{ $order->latitude }};
var orderLongitude = {{ $order->longitude }};
var ambulanceLatitude = {{ $hospital->latitude }};
var ambulanceLongitude = {{ $hospital->longitude }};

var map = L.map('map').setView([orderLatitude, orderLongitude], 18);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 23,
          minZoom: 1,
          attribution: ''
      }).addTo(map);
      L.marker([orderLatitude, orderLongitude]).addTo(map);
// Add geocoder control
// L.Control.geocoder({
//   placeholder: "إدخال العنوان أو الموقع",
// }).addTo(map);

// var directions = new L.Routing.control({
//   waypoints: [
//     L.latLng(orderLatitude, orderLongitude),
//     L.latLng(ambulanceLatitude, ambulanceLongitude)
//   ],
//   serviceUrl: 'https://api.openrouteservice.org/v2/directions/driving/json',
//   geocoder: L.Control.geocoder.nominatim(),
//   routeWhileDragging: false,
  // خيارات إضافية (اختياري)
  // profile: 'cycling', // تغيير وسيلة النقل (مثل 'driving', 'cycling', 'walking')
  // options: {
  //   language: 'ar' // تعيين لغة الاتجاهات
  // }
// }).addTo(map);

// Optional: Add ambulance marker
// var ambulanceMarker = L.marker([ambulanceLatitude, ambulanceLongitude]).addTo(map);
</script>
@endsection
