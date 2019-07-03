<div class="institucional">
    <div class="wrapper">
        <h4><?=__("Institucional");?></h4>
        <div class="box">
            <div class="item">
                <?php if($positions[0]->status):?>
                    <span><?=$positions[0]->title;?></span>
                    <div class="equipe">
                        <?php foreach($positions[0]->team as $person):?>
                            <div class="person">
                                <?php if(isset($person['files'][0])):?>
                                    <!-- <?php echo $this->Html->image('../uploads/files/'.$person['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$person['files'][0]['id']]);?> -->
                                <?php else:?>
                                    <!-- <?php echo $this->Html->image('Site.../images/media_diretoria.jpg')?> -->
                                <?php endif;?>
                                <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                                <p><?=$person->organization;?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>

                <?php if($positions[1]->status):?>
                    <span><?=$positions[1]->title;?></span>
                    <div class="equipe">
                        <?php foreach($positions[1]->team as $person):?>
                        <div class="person">
                            <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                            <p><?=$person->organization;?></p>
                        </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
            <div class="item">
                <?php if($positions[2]->status):?>
                    <span><?=$positions[2]->title;?></span>
                    <div class="equipe">
                        <?php foreach($positions[2]->team as $person):?>
                        <div class="person">
                            <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                        </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if($positions[3]->status):?>
                    <span><?=$positions[3]->title;?></span>
                    <div class="equipe">
                        <?php foreach($positions[3]->team as $person):?>
                        <div class="person">
                            <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                        </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
                <?php if($positions[4]->status):?>
                    <span><?=$positions[4]->title;?></span>
                    <div class="equipe">
                        <?php foreach($positions[4]->team as $person):?>
                        <div class="person">
                            <h5><?=$person->name;?></h5><span><?=$person->role;?></span>
                        </div>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>