<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <h3>Tambah Data Tempat Wisata </h3>
                    
            <div id="map"></div>

            <script>
                
                var map = L.map('map',{
                center: [-6.907962385289313, 107.6107993122888,12],
                zoom: 13
                });

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                var popup = L.popup();

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("You clicked the map at " + e.latlng.toString())
                        .openOn(map);
                }

                map.on('click', onMapClick);
                        

            </script>
            
            <form action="<?= BASEURL; ?>/wisata/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <hr>
                        <label for="nama" class="form-label">Nama Tampat Wisata</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="lokasi" class="form-label">lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>

                    <div class="mb-3">
                        <label for="lat" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="lat" name="lat">
                    </div>
                    <div class="">
                        <label for="lng" class="form-label">Longtitude</label>
                        <input type="text" class="form-control" id="lng" name="lng">
                    </div>

                    <div class="pb-5">
                        <a href="<?= BASEURL;?>/wisata" class="btn btn-secondary">Close</a>
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Tambah data</button>
                    </div>
                </form>
        </div>
    </div>
</div>