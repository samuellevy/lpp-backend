<div class="section_interna">
    <div class="wrapper">
        <div class="list_number">
            <?php foreach($numbers as $number):?>
                <?=$number->url!=''?'<a href="'.$number->url.'">':'<a>';?>
                    <div class="item">
                        <?php echo $this->Html->image('../uploads/files/'.$number['files'][0]['filename'], ['class'=>'form-img icon-size', 'data-uid'=>$number['files'][0]['id']]);?>
                        <span><?=$number->title?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>