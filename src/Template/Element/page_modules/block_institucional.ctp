<div class="institucional">
    <div class="wrapper">
        <h4>Institucional</h4>
        <div class="box">
            <div class="item">
                <span>Diretoria Luta pela Paz</span>
                <div class="equipe_media">
                    <?php foreach($team_top as $person):?>
                    <div class="person">
                        <?php if(isset($person['files'][0])):?>
                            <?php echo $this->Html->image('../uploads/files/'.$person['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$person['files'][0]['id']]);?>
                        <?php else:?>
                            <?php echo $this->Html->image('Site.../images/media_diretoria.jpg')?>
                        <?php endif;?>
                        <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                        <p><?=$person->organization;?></p>
                    </div>
                    <?php endforeach;?>
                </div>
                <span>Conselho Fiscal Luta pela Paz</span>
                <div class="equipe_media">
                    <?php foreach($team_mid as $person):?>
                    <div class="person">
                        <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                        <p><?=$person->organization;?></p>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="item"><span>Conselho Consultivo Luta pela Paz</span>
                <div class="equipe">
                    <?php foreach($team_bot as $person):?>
                    <div class="person">
                        <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>