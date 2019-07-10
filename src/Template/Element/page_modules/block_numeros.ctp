<?php $params = json_decode($component->params);?>
<div class="numbers_home">
    <div class="box">
        <div class="destaque">
            <div class="first">
                <div class="media">
                    <?=$this->Html->image('../uploads/files/'.$numbers[0]->desktop[0]->filename, ['class'=>'desktop']);?>
                    <?=$this->Html->image('../uploads/files/'.$numbers[0]->mobile[0]->filename, ['class'=>'mobile']);?>
                </div>
                <a class="btn_numbers" href="<?=$params->url;?>"><?=__("acompanhe nossas conquistas");?></a>
            </div>
        </div>
        <div class="display">
            <div class="second">
                <div class="media">
                    <?=$this->Html->image('../uploads/files/'.$numbers[1]->desktop[0]->filename, ['class'=>'desktop']);?>
                    <?=$this->Html->image('../uploads/files/'.$numbers[1]->mobile[0]->filename, ['class'=>'mobile']);?>
                </div>
            </div>
            <div class="third">
                <div class="media">
                    <?=$this->Html->image('../uploads/files/'.$numbers[2]->desktop[0]->filename, ['class'=>'desktop']);?>
                    <?=$this->Html->image('../uploads/files/'.$numbers[2]->mobile[0]->filename, ['class'=>'mobile']);?>
                </div>
            </div>
            <div class="quarter">
                <div class="media">
                    <?=$this->Html->image('../uploads/files/'.$numbers[3]->desktop[0]->filename, ['class'=>'desktop']);?>
                    <?=$this->Html->image('../uploads/files/'.$numbers[3]->mobile[0]->filename, ['class'=>'mobile']);?>
                </div>
            </div>
            <div class="fifth">
                <div class="media">
                    <?=$this->Html->image('../uploads/files/'.$numbers[4]->desktop[0]->filename, ['class'=>'desktop']);?>
                    <?=$this->Html->image('../uploads/files/'.$numbers[4]->mobile[0]->filename, ['class'=>'mobile']);?>
                </div>
            </div>
        </div>
    </div>
</div>