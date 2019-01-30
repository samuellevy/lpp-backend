<div class="section_projects">
    <h4>Nossos Programas</h4>
    <div class="wrapper">
        <div class="box-content"> 
            <div class="nav-box">
                <?php foreach($programs as $program):?>
                    <div class="item" data-id="tabs-<?=$program->id;?>"><span><?=$program->name;?></span></div>
                <?php endforeach;?>
            </div>
            
            <?php foreach($programs as $program):?>
                <div class="content_item" id="tabs-<?=$program->id;?>">
                    <div class="content-box">
                        <div class="item-title">
                            <h5>Programa</h5><span><?=$program->name;?></span>
                        </div>
                        <div class="item">
                            <h5>Pilares </h5>
                            <div class="content"><?php echo $this->Html->image('Site.../images/boxe.png');?><span>Boxe e artes marciais</span><?php echo $this->Html->image('Site.../images/liderancajuvenil.png');?><span>Liderança juvenil</span><?php echo $this->Html->image('Site.../images/suportelocal.png');?><span>Suporte social</span></div>
                        </div>
                        <div class="item">
                            <h5>Atuação</h5>
                            <div class="content"><span><?=$program->atuacao;?></span></div>
                        </div>
                    </div>
                    <div class="border"></div>
                    <div class="article-box"> 
                        <div class="media">
                        <?php if(isset($program['files'][0])):?>
                            <?php echo $this->Html->image('../uploads/files/'.$program['files'][0]['filename']);?>
                        <?php endif;?>
                        </div>
                        <div class="text">
                            <?=$program->content;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</div>