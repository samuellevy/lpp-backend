<div class="section_projects">
    <h4>Our programmes</h4>
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
                            <h5>Program</h5><span><?=$program->name;?></span>
                        </div>
                        <div class="item">
                            <h5>Pillars </h5>
                            <div class="content">
                                <?php
                                $my_pillars = $program->pillars;
                                $my_pillars = explode(',',$my_pillars);

                                foreach($my_pillars as $my_pillar):
                                    foreach($pillars as $pillar):
                                        if($my_pillar==$pillar->id):
                                            echo $this->Html->image('Site.../images/'.$pillar->image).'<span>'.$pillar->name.'</span>';
                                        endif;
                                    endforeach;
                                endforeach;
                                ?>
                                
                            </div>
                        </div>
                        <div class="item">
                            <h5>location</h5>
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