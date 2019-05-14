<div class="transparency">
    <div class="wrapper">
        <div class="box">
            <h4>Transparência</h4>
            <div class="slide-title">
                <h5><?=$count_documents_pe>0?'Pesquisas Externas':''?></h5>
                <div class="content slider_transparencia">
                    <?php foreach($documents as $document):?>
                    <?php if($document->category_id==1):?>
                    <div class="item">
                        <div class="item-content">
                            <div class="title">
                                <?=$document->language=='PT'?$this->Html->image('Site.../images/brflag.png'):$this->Html->image('Site.../images/ukflag.png');?>
                                <h5><?=$document->name;?></h5>
                            </div>
                            <div class="date">
                                <span><?=$document->reference;?></span>
                                <a href="<?=$this->Url->image('../documents/'.$document['files'][0]['filename']);?>" target="_blank">Ver<img src="<?=$this->Url->image('Site.../images/arrow.png')?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
                </div>
                
                
                <div class="slide-title"></div>
                <h5 id="relatorios"><?=$count_documents_ra>0?'Relatórios anuais':''?></h5>
                <div class="content slider_transparencia">
                    <?php foreach($documents as $document):?>
                    <?php if($document->category_id==2):?>
                    <div class="item">
                        <div class="item-content">
                            <div class="title">
                                <?=$document->language=='PT'?$this->Html->image('Site.../images/brflag.png'):$this->Html->image('Site.../images/ukflag.png');?>
                                <h5><?=$document->name;?></h5>
                            </div>
                            <div class="date">
                                <span><?=$document->reference;?></span>
                                <a href="<?=$this->Url->image('../documents/'.$document['files'][0]['filename']);?>" target="_blank">Ver<img src="<?=$this->Url->image('Site.../images/arrow.png')?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
                </div>
                
                
                <div class="slide-title"></div>
                <h5><?=$count_documents_au>0?'Auditorias':''?></h5>
                <div class="content slider_transparencia">
                    <?php foreach($documents as $document):?>
                    <?php if($document->category_id==3):?>
                    <div class="item">
                        <div class="item-content">
                            <div class="title">
                                <?=$document->language=='PT'?$this->Html->image('Site.../images/brflag.png'):$this->Html->image('Site.../images/ukflag.png');?>
                                <h5><?=$document->name;?></h5>
                            </div>
                            <div class="date">
                                <span><?=$document->reference;?></span>
                                <a href="<?=$this->Url->image('../documents/'.$document['files'][0]['filename']);?>" target="_blank">Ver<img src="<?=$this->Url->image('Site.../images/arrow.png')?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>