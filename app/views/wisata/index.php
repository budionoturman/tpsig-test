<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData " data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Wisata</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?=BASEURL; ?>/wisata/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="keyword" id="keyword" autocomplete="of">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-2">Daftar Tempat Wisata</h3>
            <ul class="list-group">
                <?php foreach($data['wst'] as $wst) : ?>
                    <li class="list-group-item ">
                        <b> <?= $wst['nama']; ?> </b>
                        <a class="btn btn-danger float-end ms-2" href="<?= BASEURL;?>/wisata/hapus/<?=$wst ['id']; ?>" onclick="return confirm('Yakin Hapus Data?');">Hapus</a>
                        <a data-id="<?=$wst['id']; ?>" class="tampilModalUbah btn btn-success float-end ms-2" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL;?>/wisata/ubah/<?=$wst ['id']; ?>">Ubah</a>
                        <a class="btn btn-info float-end " href="<?= BASEURL;?>/wisata/detail/<?=$wst ['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Wisata</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="<?= BASEURL; ?>/wisata/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
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
                    <div class="mb-3">
                        <label for="lng" class="form-label">Longtitude</label>
                        <input type="text" class="form-control" id="lng" name="lng">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>