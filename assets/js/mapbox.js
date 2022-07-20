mapboxgl.accessToken = 'pk.eyJ1IjoiaGFwcHliYW5hbmE3OCIsImEiOiJjbDVzMzNmYWgwNTR0M2xscjZnaXZ1cGxjIn0.-m2KHC4bGbof_G-S7PFTUQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [9.551898957423646, 45.75183538809932],
        zoom: 15
    });
    const marker = new mapboxgl.Marker()
    .setLngLat([9.551898957423646, 45.75183538809932])
    .addTo(map);