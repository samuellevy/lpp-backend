<div class="partners">
    <div class="wrapper">
        <h4>Nossos parceiros</h4>
        <div class="box" id="tabs">
            <div class="menu_partners">
                <div class="item" id="global" data-id="tabs-1">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Global oficial</span>
                    </div>
                    <p>Conheça<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="brasil" data-id="tabs-2">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Brasil</span>
                    </div>
                    <p>Conheça<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="reino" data-id="tabs-3">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Reino Unido</span>
                    </div>
                    <p>Conheça<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="internacional" data-id="tabs-4">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Internacional</span>
                    </div>
                    <p>Conheça<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
            </div>
            <div class="content_partners" id="tabs-1"><span>Nossos parceiros globais apoiam nosso trabalho tanto no Brasil quanto no Reino Unido, fazendo nosso impacto ainda maior.</span>
                <div class="media">
                    <?php foreach($sponsors_global as $partner):?>
                        <?php if(isset($partner['files'][0])):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-2"><span>dasdasdasdsada parceiros globais apoiam nosso trabalho tanto no Brasil quanto no Reino Unido, fazendo nosso impacto ainda maior.</span>
                <div class="media">
                    
                    <div></div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parcerias Institucionais</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parceiros</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Apoiadores</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==3):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-3"><span>Nossos parceiros globais apoiam nosso trabalho tanto no Brasil quanto no Reino Unido, fazendo nosso impacto ainda maior.</span>
                <div class="media">
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parcerias Institucionais</div>
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parceiros</div>
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Apoiadores</div>
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==3):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-4"><span>Nossos parceiros globais apoiam nosso trabalho tanto no Brasil quanto no Reino Unido, fazendo nosso impacto ainda maior.</span>
                <div class="media">
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parcerias Institucionais</div>
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Parceiros</div>
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>

                    <div class="type_title">Apoiadores</div>
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==3):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>