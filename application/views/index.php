<div class="places">

    <div class="places_in" id="a">
        <div>
        <?php
        for ($i=1; $i<=4; $i++) {?>
            <span style="font-size:x-small; float: left; margin: 0 7px 0 7px;"><?= $i;?></span>
            <?php
            for ($j = 1; $j <= 10; $j++) {

                if ( !empty($_SESSION['cart']) && in_array(['a',$i,$j],$_SESSION['cart'])){?>
                    <span class="pa" style="background: red;" id="a-<?=$i ?>-<?= $j?>"><?= $j ?></span>
                    <?php } else {?>

                <span class="pa" id="a-<?=$i ?>-<?= $j?>"><?= $j ?></span> <?php } ?>
                    <?php }?> <div class="clear"></div> <?php
        }
        ?>
        </div>
    </div>


    <div class="places_in" id="b">
        <div>
            <?php
            for ($i=1; $i<=4; $i++) {?>
                <span style="font-size:x-small; float: left; margin: 0 7px 0 7px;"><?= $i;?></span>
                <?php
                for ($j = 1; $j <= 10; $j++) {

                    if ( !empty($_SESSION['cart']) && in_array(['b',$i,$j],$_SESSION['cart'])){?>
                        <span class="pb" style="background: red;" id="b-<?=$i ?>-<?= $j?>"><?= $j ?></span>
                    <?php } else {?>

                        <span class="pb" id="b-<?=$i ?>-<?= $j?>"><?= $j ?></span> <?php } ?>
                <?php }?> <div class="clear"></div> <?php
            }
            ?>
        </div>
    </div>

</div>
<div class="places">
    <div class="places_in" id="c">
        <?php
        for ($i=1; $i<=5; $i++) {?>
            <span style="font-size:x-small"><?= $i;?></span>&nbsp;&nbsp;
            <?php
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-success"><?= $j ?></button>
            <?php }  ?> <br /> <?php
        }
        ?>
    </div>
    <div class="places_in" id="D">
        <?php
        for ($i=1; $i<=5; $i++) {
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-primary"><?= $j ?></button>
            <?php }  ?> <br /> <?php
        }
        ?>
    </div>
    <div class="places_in" id="E">
        <?php
        for ($i=1; $i<=5; $i++) {
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-danger"><?= $j ?></button>
            <?php }  ?> <br /> <?php
        }
        ?>
    </div>
</div>
<div class="places">
    <div class="places_in" id="F">
        <?php
        for ($i=1; $i<=4; $i++) {
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-info"><?= $j ?></button>
            <?php }  ?> <br /> <?php
        }
        ?>
    </div>
    <div class="places_in" id="G">
        <?php
        for ($i=1; $i<=4; $i++) {
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-warning"><?= $j ?></button>
            <?php } ?> <br /> <?php
        }
        ?>
    </div>
</div>

