<main>
  <div class="list-karyawan">
    <?php foreach( $karyawan as $kwn):?>
      <div class="card" style="width: 18rem;">
        <img src="assets/image/member/<?= $kwn['foto']?>" class="card-img-top" alt="<?= $kwn['namaKrywn']?>">
      <div class="card-body-info">
        <h5 class="card-title"><?= $kwn['namaKrywn']?></h5>
      </div>
      <ul class="list-group list-group-light">
         <li class="list-group-item"><?= $kwn['jabatan']?></li>
       </ul>
    <?php endforeach; ?>
  </div>
</main>
