<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyA0o1jCDhBhf_lIBcvBC6k1dOvdOf1Uuaw&callback=myMap" async defer></script>

<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title" id="myModalLabel"><?php echo "Location";?></h4>
			</div>
			<div class="modal-body">
				<table class="table table-striped table-hover">
								<tbody class="no-bd-y">
									 <?php if($location == '0,0'){ ?>
	                                     <div style="width:100%;height:450px"><center><h2>GPS was off, no location found</h2></center></div>
                                     <?  } else { ?>
										<div id="map" style="width:100%;height:450px"> </div>
									 <? } ?>
								</tbody>
				</table>
			</div>
        </div>
</div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(<?=$location?>);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 18};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
  contentString = "Last Location";
  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  infowindow.open(map,marker);
}
</script>
