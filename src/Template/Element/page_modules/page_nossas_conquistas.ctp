<div class="numbers_home">
    <div class="box">
        <div class="destaque">
            <div class="first">
                <div class="media"><?php echo $this->Html->image('Site.../images/numbers_1.png');?></div>
            </div>
        </div>
        <div class="display">
            <div class="second">
                <div class="media"><?php echo $this->Html->image('Site.../images/numbers_2.png');?></div>
            </div>
            <div class="third">
                <div class="media"><?php echo $this->Html->image('Site.../images/numbers_3.png');?></div>
            </div>
            <div class="quarter">
                <div class="media"><?php echo $this->Html->image('Site.../images/numbers_4.png');?></div>
            </div>
            <div class="fifth">
                <div class="media"></div><?php echo $this->Html->image('Site.../images/numbers_5.png');?>
            </div>
        </div>
    </div>
</div>
<div class="section_lifetransform">
    <div class="wrapper">
        <h3><?=__("Vidas Transformadas");?></h3>
        <?php foreach($testimonials as $key=>$testimonial):?>
        <div class="box <?=($key+1)%2==0?'inverter':''?>">
            <div class="item">
                <div class="media">
                    <?php if(isset($testimonial['files'][0])):?>
                        <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?>
                    <?php endif;?>
                </div>
            </div>
            <div class="item">
                <div class="text">
                    <h4><?=$testimonial->name;?></h4><span><?=$testimonial->subtitle;?></span>
                    <p><?=$testimonial->testimony;?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->element('page_modules/block_transparencia');?>