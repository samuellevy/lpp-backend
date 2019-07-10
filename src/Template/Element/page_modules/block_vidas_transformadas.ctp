<div class="section_lifes">
    <div class="wrapper">
        <h2><?=__("Vidas Transformadas");?></h2>
        <div class="box">
            <?php foreach($testimonials as $testimonial):?>
            <?php $params = json_decode($component->params);?>
            <div class="item">
                <div class="media">
                    <?php if(isset($testimonial['files'][0])):?>
                        <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?>
                    <?php endif;?>
                </div>
                <div class="content">
                    <h3><?=$testimonial->name;?></h3><span><?=$testimonial->subtitle;?></span>
                    <p><?=$testimonial->quote;?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div><a class="btn_more" href="<?=$params->url;?>"><?=__("Acompanhe");?></a>
    </div>
</div>