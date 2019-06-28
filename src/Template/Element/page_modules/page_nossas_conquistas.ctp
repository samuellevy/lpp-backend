<div class="numbers_home">
    <div class="box">
        <div class="destaque">
            <div class="first">
                <div class="media"><?=$this->Html->image('../uploads/files/'.$numbers[0]->desktop[0]->filename, ['class'=>'scaled-img', 'data-uid'=>$numbers[0]->desktop[0]->id]);?></div>
            </div>
        </div>
        <div class="display">
            <div class="second">
                <div class="media"><?=$this->Html->image('../uploads/files/'.$numbers[1]->desktop[0]->filename, ['class'=>'scaled-img', 'data-uid'=>$numbers[0]->desktop[0]->id]);?></div>
            </div>
            <div class="third">
                <div class="media"><?=$this->Html->image('../uploads/files/'.$numbers[2]->desktop[0]->filename, ['class'=>'scaled-img', 'data-uid'=>$numbers[0]->desktop[0]->id]);?></div>
            </div>
            <div class="quarter">
                <div class="media"><?=$this->Html->image('../uploads/files/'.$numbers[3]->desktop[0]->filename, ['class'=>'scaled-img', 'data-uid'=>$numbers[0]->desktop[0]->id]);?></div>
            </div>
            <div class="fifth">
                <div class="media"><?=$this->Html->image('../uploads/files/'.$numbers[4]->desktop[0]->filename, ['class'=>'scaled-img', 'data-uid'=>$numbers[0]->desktop[0]->id]);?></div>
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