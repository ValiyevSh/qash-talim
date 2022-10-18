<div class="glavni">
    <div class="glavni-in">
        <div class="slider">
            <?php
            $sliders=\common\models\Slider::find()->all();
            foreach ($sliders as $slider):
                ?>
                <div class="slide" style="background-image: url('<?=$slider->img?>');"></div>
            <?php
            endforeach;
            ?>
        </div>
        <div class="glavni-block">
            <div class="my-container">
                <div class="glavni-block-in">
                    <h1 class="txt-60 ab3">
                        Qashqadaryo viloyati
                        Xalq ta’lim boshqarmasi
                    </h1>
                    <p class="txt-24 ab4">
                        <?=yii::t('app','rasmiy')?>
                    </p>
                    <a href="batafsil.html" class="glavni-btn txt-18 ab4">
                       <?=yii::t('app','about')?>
                    </a>
                    <div class="counter-in line-left">
                        <div class="card-c" id="counter-box">
                            <h1 class="txt-30 counter" data-number="58"></h1>
                            <p class="txt-14">Jami murojatlar</p>
                        </div>
                        <div class="card-c" id="counter-box">
                            <h1 class="txt-30 counter" data-number="58"></h1>
                            <p class="txt-14">Ko‘rib chiqilgan</p>
                        </div>
                        <div class="card-c" id="counter-box">
                            <h1 class="txt-30 counter" data-number="58"></h1>
                            <p class="txt-14">Ko‘rib chiqilmoqda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>