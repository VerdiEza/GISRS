<div id="map" style="width: 100%; height: 500px;"></div>
<script>
    var map = L.map('map').setView([-6.9182695,106.9313028,20], 15);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

<?php foreach ($lokasi as $key => $value) {?>
    L.marker([<?= $value->latitude?>,<?= $value->longitude?>]).addTo(map);
<?php }?>
var lokasi1= L.marker([-6.9121057,106.9198677]).addTo(map)
   .bindPopup('RS Bhayangkara Setukpa.')
    .openPopup();
var lokasi2=L.marker([-6.91611,106.93451]).addTo(map)
   .bindPopup('RS R. Syamsudin, SH.')
    .openPopup();
 var lokasi3=L.marker([-6.92203,106.92377]).addTo(map)
   .bindPopup('RS Kartika Kasih')
    .openPopup();
    var lokasi4=L.marker([-6.91854,106.91713]).addTo(map)
   .bindPopup('RS Islam Assyifa')
    .openPopup();
    var lokasi5=L.marker([-6.92181,106.93447]).addTo(map)
   .bindPopup('RS Rido Galih')
    .openPopup();


</script>
