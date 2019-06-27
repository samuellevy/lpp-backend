<div class="timeline">
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
                                <p><?=__($event->description);?></p>
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