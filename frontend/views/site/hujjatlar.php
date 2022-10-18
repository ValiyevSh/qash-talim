<div class="work">
    <div class="my-container">
        <div class="work-in">
            <div class="main-content">
                <?php
                $links=\common\models\Link::find()->all();
                foreach ($links as $link):
                ?>
                <a href="<?=$link->url?>" class="card-c ab">
                    <div class="img">
                        <img src="<?=$link->icon?>" alt="" class="top">
                    </div>
                    <h1 class="txt-20"><?=$link->title?></h1>
                </a>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>