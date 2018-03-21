<?php
require_once(PATH_VIEWS.'header.php');
?>

<body>
<div class="container">
    <div class="section">

    </div>
    <div class="row">
        <div class="col s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="assets/img/emery.jpeg">
                    <span class="card-title"><?= TITRE_PSGREAL ?></span>
                </div>
                <div class="card-content">
                    <p><?= RESUME_PSGREAL ?></p>
                </div>
                <div class="card-action">
                    <a href="index.php?page=psgemery"><?= LIEN ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

    </div>
    <div class="row">
        <div class="col s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="assets/img/neymar.jpg">
                    <span class="card-title"><?= TITRE_NEYMARPSG ?></span>
                </div>
                <div class="card-content">
                    <p><?= RESUME_NEYMARPSG ?></p>
                </div>
                <div class="card-action">
                    <a href="index.php?page=psgneymar"><?= LIEN ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

    </div>
    <div class="row">
        <div class="col s12">
            <div class="card medium">
                <div class="card-image">
                    <img src="assets/img/genesio.jpg">
                    <span class="card-title"><?= TITRE_GENESIO ?></span>
                </div>
                <div class="card-content">
                    <p><?= RESUME_GENESIO ?></p>
                </div>
                <div class="card-action">
                    <a href="index.php?page=olgenesio"><?= LIEN ?></a>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

<?php
require_once(PATH_VIEWS.'footer.php');?>