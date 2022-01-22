<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <img src="../public/img/wallpaperbetter.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['wst']['nama']; ?></h5>
            <p class="card-text mt-4"><?= $data['wst']['lokasi']; ?></p>
            <p class="card-text mt-4"><?= $data['wst']['lat']; ?></p>
            <p class="card-text mt-4"><?= $data['wst']['lng']; ?></p>
            <a class="btn btn-warning" href="<?= BASEURL;?>/wisata" class="card-link">Kembali</a>
   
        </div>
    </div>	
</div>