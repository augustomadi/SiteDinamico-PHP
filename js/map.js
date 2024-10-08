async function initMap() {
	 const { Map } = await google.maps.importLibrary("maps");
	 const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
	 const map = new Map(document.getElementById("map"), {
	 center: { lat: -22.951916, lng: -43.210487 },
	 zoom: 14,
	 mapId: "4504f8b37365c3d0",
	 });
	 
	 const draggableMarker = new AdvancedMarkerElement({
	 map,
	 position: { lat: -22.951916, lng: -43.210487},
	 gmpDraggable: true,
	 title: "This marker is draggable. Click to remove.",
	 });
	 
	 draggableMarker.addListener("click", (event) => {
	 // Remove AdvancedMarkerElement from Map
	 draggableMarker.map = null;
	 });
	 map.addListener("click", (event) => {
	 // Set AdvancedMarkerView position and add to Map
	 draggableMarker.position = event.latLng;
	 draggableMarker.map = map;
	 });
	 }
	 
 initMap();