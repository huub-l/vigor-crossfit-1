/**
 * Maps
 */

function init() {
  /* eslint-disable */
  let map;
  let location_coordinates = [];
  let location_content     = [];

  const google = window.google;

  const locations = document.querySelectorAll('.location');
  const location_list_container = document.querySelector('.location-list');

  const active_marker = location_list_container.getAttribute('data-active-marker');
  const in_active_marker = location_list_container.getAttribute('data-in-active-marker');

  // Loop through all of the locations grab their coords and content
  locations.forEach(location => {
    let coordinates = {
      lat: location.getAttribute('data-lat'),
      lng: location.getAttribute('data-long'),
      title: location.getAttribute('data-identifier')
    }

    let content = {};

    content[coordinates.title] = getContent(coordinates.title)

    location_coordinates.push(coordinates);
    location_content.push(content);
  })

  // Create map
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 37.7995391, lng: -122.4424301},
    zoom: 13,
    disableDefaultUI: true
  });

  // Loop through our markers and put them in the map
  location_coordinates.forEach((location, index) => {
    const latlng = new google.maps.LatLng(location.lat, location.lng);

    const marker = new google.maps.Marker({
      position: latlng,
      title: location.title,
      icon: in_active_marker
    });

    marker.setMap(map);

    const infowindow = new google.maps.InfoWindow({
      content: getContent(location.title),
      pixelOffset: new google.maps.Size(245, 120)
    });

    // Attach click event to each marker to change icon and 
    // display info window
    marker.addListener('click', function() {
      if(this.icon === active_marker) {
          this.setIcon(in_active_marker);
          infowindow.close(map, marker);
        } else {
          this.setIcon(active_marker);
          infowindow.open(map, marker);
        }
    });
  })

  /**
   * Grab the content of an info window using
   * the location_id
   * 
   * @param {string} location_id 
   */
  function getContent(location_id) {
    return document.querySelector(`#${location_id} .info`);
  }
}

export {
  init,
};
