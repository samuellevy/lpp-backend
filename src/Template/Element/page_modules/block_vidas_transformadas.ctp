<div class="section_lifes">
    <div class="wrapper">
        <h2>Champions in Life</h2>
        <div class="box">
            <?php foreach($testimonials as $testimonial):?>
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
        </div><a class="btn_more" href="/nossas-conquistas">Click here for more</a>
    </div>
</div>