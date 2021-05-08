//load the map calling the function loadMap
function loadMap() {
  // The location of Uluru
  const plovdiv = { lat:47.07487, lng: 12.69525 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: plovdiv,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: plovdiv,
    map: map,
  });

}