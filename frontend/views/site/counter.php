<div class="counterr">
    <div class="my-container">
        <h1 class="txt-48 line-left al">Asosiy ko’rsangichlar</h1>
        <div class="counter-in">
            <?php

            $counters=\common\models\Indicator::find()->all();
            foreach ($counters as $counter):
            ?>

            <div class="card-c ab" id="counter-box">
                <div class="img-bg">

                    <img src="<?=$counter->icon?>" alt="" class="top">
                </div>
                <h1 class="txt-24 counter" data-number="<?=$counter->number?>"></h1>
                <p class="txt-16"><?=$counter->title?></p>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>