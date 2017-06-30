<div class="places">

    <div class="places_in" id="a">
        <div>
        <?php
        for ($i=1; $i<=4; $i++) {?>
            <span style="font-size:x-small; float: left; margin: 0 7px 0 7px;"><?= $i;?></span>
            <?php
            for ($j = 1; $j <= 10; $j++) {
                if ($i != 1 )?>
                <span class="place" id="<?=$i ?>-<?= $j?>"><?= $j ?></span>
                    <?php }  ?> <div class="clear"></div> <?php
        }
        ?>
        </div>
    </div>


    <div class="places_in" id="b">
        <?php
        for ($i=1; $i<=4; $i++) {?>
            <span style="font-size:x-small"><?= $i;?></span>&nbsp;&nbsp;
            <?php
            for ($j = 1; $j <= 10; $j++) { ?>
                <button type="button" class="btn btn-warning"><?= $j ?></button>
            <?php }  ?> <br /> <?php
        }
        ?>
    </div>

</div>
<div class="places">
    <div class="places_in" id="C">
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

