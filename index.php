<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "./assets/components/head.php";
    ?>
</head>

<body class="container-fluid m-0 p-0">

    <div class="row m-0 p-0">

        <?php
        require "./assets/components/preloader.php";
        ?>

        <?php
        require "./assets/components/entranceCanvas.php";
        ?>

        <div class="col-12" style="z-index: 2 !important;">
            <div class="row">
                <?php
                require "./assets/components/home.php";
                ?>
            </div>
        </div>

    </div>


    <?php
    require "./assets/components/foot.php";
    ?>

</body>

</html>