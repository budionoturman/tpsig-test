<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['wst']['nama']; ?></h5>
            <p class="card-text mt-4"> Lokasi : <?= $data['wst']['lokasi']; ?></p>
            <p class="card-text mt-4"> Latitude : <?= $data['wst']['lat']; ?></p>
            <p class="card-text mt-4"> Longitude : <?= $data['wst']['lng']; ?></p>
            <a class="btn btn-secondary" href="<?= BASEURL;?>/wisata" class="card-link">Kembali</a>
   
        </div>
    </div>	
</div>