<div class="section_projects_mobile">
    <div class="wrapper">
        <div class="box-content">
            <?php foreach($programs as $program):?>
                <div class="item">
                    <div class="media" data-id="tabs-<?=$program->id;?>">
                        <?php if(isset($program['files'][0])):?>
                            <?php echo $this->Html->image('../uploads/files/'.$program['files'][0]['filename']);?>
                        <?php endif;?>
                        <div class="overlay"></div><span>Atletas da paz</span>
                    </div>
                    <div class="item-content" id="tabs-<?=$program->id;?>">
                        <div class="title">
                            <h5>Programa</h5><span><?=$program->name;?></span>
                        </div>
                        <div class="description">
                            <div class="pillars">
                                <h5>Pilares</h5>
                                <?php
                                $my_pillars = $program->pillars;
                                $my_pillars = explode(',',$my_pillars);

                                foreach($my_pillars as $my_pillar):
                                    foreach($pillars as $pillar):
                                        if($my_pillar==$pillar->id):
                                            echo '<span>'.$pillar->name.'</span>';
                                        endif;
                                    endforeach;
                                endforeach;
                                ?>
                            </div>
                            <div class="location">
                                <h5>Atuação</h5><span><?=$program->atuacao;?></span>
                            </div>
                        </div>
                        <div class="article-box">
                            <?=$program->content;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>