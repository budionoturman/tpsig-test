<div class="row">
    <div class="col-lg-6">
        <div class="container mt-3">
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
            </script>
        </div>
    </div>
</div>