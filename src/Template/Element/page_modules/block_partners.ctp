<div class="partners">
    <div class="wrapper">
        <h4>Our partners</h4>
        <div class="box" id="tabs">
            <div class="menu_partners">
                <div class="item" id="global" data-id="tabs-1">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Global</span>
                    </div>
                    <p>Learn More<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="brasil" data-id="tabs-2">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>Brazil</span>
                    </div>
                    <p>Learn More<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="reino" data-id="tabs-3">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>UK</span>
                    </div>
                    <p>Learn More<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
                <div class="item" id="internacional" data-id="tabs-4">
                    <div class="media_title">
                        <?php echo $this->Html->image('Site.../images/global.png');?>
                        <span>International</span>
                    </div>
                    <p>Learn More<?php echo $this->Html->image('Site.../images/arrow_partners.png');?></p>
                </div>
            </div>
            <div class="content_partners" id="tabs-1"><span>Our global partners support our work in both Brazil and in the UK, helping make our impact as broad as possible.</span>
                <div class="media">
                    <?php foreach($sponsors_global as $partner):?>
                        <?php if(isset($partner['files'][0])):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-2"><span>Our Brazil partners support the work which is done directly at our Academy in Rio as well as programmes that we offer within Brazil.</span>
                <div class="media">
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="media">
                    <div class="type_title">Institutional partners</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <div class="type_title">Partners</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <div class="type_title">Suppporters</div>
                    <?php foreach($sponsors_brasil as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==3):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-3"><span>Our UK partners support the work which is done directly at our Academy in London as well as programmes that we offer within the UK.</span>
                <div class="media">
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="media">
                    <div class="type_title">Institutional partners</div>
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <div class="type_title">Partners</div>
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <!-- <div class="type_title">Apoiadores</div> -->
                    <?php foreach($sponsors_uk as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==3):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="content_partners" id="tabs-4"><span>Our international partners support our work in Jamaica, South Africa and across the Fight for Peace Alliance.</span>
                <div class="media">
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==0):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="media">
                    <div class="type_title">Institutional partners</div>
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==1):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <div class="type_title">Partners</div>
                    <?php foreach($sponsors_internacional as $partner):?>
                        <?php if(isset($partner['files'][0]) && $partner->type==2):?>
                            <div class="item_media"><?php echo $this->Html->image('../uploads/files/'.$partner['files'][0]['filename'], ['class'=>'', 'data-uid'=>$partner['files'][0]['id']]);?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                <div class="parceiros_7">
                    <!-- <div class="type_title">Apoiadores</div> -->
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