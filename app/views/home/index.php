<div class="container mt-3">
    <h3>Lokasi tempat Wisata</h3>
    <div id="map"></div>
    <script>
        var map = L.map('map',{
        center: [-6.907962385289313, 107.6107993122888,12],
        zoom: 13
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        <?php foreach($data['wst'] as $wst) : ?>
            var marker = L.marker([<?=$wst['lat']; ?>, <?=$wst['lng']; ?>]).addTo(map)
            .bindPopup("<b><?=$wst['nama']; ?></b> <br/>"+"<?=$wst['lokasi']; ?>");
        <?php endforeach; ?>
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);
    </script>
</div>

