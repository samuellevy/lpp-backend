<div class="timeline">
    <div class="wrapper">
        <h4>Our history</h4>
        <p>Fight for Peace was founded in Complexo da Mare, Rio de Janeiro, in 2000 by anthropologist and British ex-amateur boxer Luke Dowdney. Since then, we have  grown both locally and globally, offering the support necessary for young people to break down barriers and achieve peace in their communities. Take a look at the timeline below at the key moments in our history and how our work has evolved.</p>
    </div>
    <div class="box">
        <div class="wrapper">
            <div class="slider">
                <?=$qtd_event=0;?>
                <?php foreach($timeline as $year):?>
                    <div class="item">
                    <?php foreach($year as $key=>$event):?>
                        <div class="block_content <?=$qtd_event%2==0?'':'reverse';?>">
                            <?php if(isset($event['files'][0])):?>
                                <div class="media">
                                    <?php echo $this->Html->image('../uploads/files/'.$event['files'][0]['filename'], ['class'=>'', 'data-uid'=>$event['files'][0]['id']]);?>
                                </div>
                            <?php endif;?>
                            <?php if(isset($event['files'][0])):?>
                            <?php endif;?>
                            <div class="bar" style="<?=isset($event['files'][0])?'':'background-color: transparent;';?>"></div>
                            <div class="text">
                                <h5><?=$key==0?$event->year:'';?></h5>
                                <p><?=$event->description;?></p>
                            </div>
                        </div>
                        <?php $qtd_event++;?>
                    <?php endforeach;?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>