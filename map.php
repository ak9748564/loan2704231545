<!DOCTYPE html>
<html>
<body>


<div id="googleMap" style="width:100%;height:500px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-ftQ2RCtfr_2TGsIfDGPEshzBtxH_FGs&callback=myMap"></script>

</body>
</html>