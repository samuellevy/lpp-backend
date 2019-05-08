<div class="timeline">
    <div class="wrapper">
        <h4>Nossa trajetória</h4>
        <p>Fundada em 2000, pelo antropólogo e ex-boxeador inglês Luke Dowdney, a Luta pela Paz vem crescendo local e globalmente, buscando oferecer suporte e apoio necessário para auxiliar jovens a romper barreiras e alcançar a paz em suas comunidades. Acompanhe abaixo a evolução do nosso trabalho e os momentos mais marcantes da nossa trajetória.</p>
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