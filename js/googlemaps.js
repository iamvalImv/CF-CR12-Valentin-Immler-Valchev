//load the map calling the function loadMap
function loadMap() {
  // The location of Uluru
   const myLat = parseFloat(document.getElementById("myLat").value);
   const myLong = parseFloat(document.getElementById("myLong").value);

  const myLocation = {
    lat: myLat,
    lng: myLong
  };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: myLocation,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: myLocation,
    map: map,
  });

}