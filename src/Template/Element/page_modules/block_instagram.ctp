<div class="gallery">
    <div class="box">
        <div class="media">
            <a href="<?=$this->Instagram->getLastPic()->link?>" target="_blank"><?='<img src="'.$this->Instagram->getLastPic()->images->standard_resolution->url.'"/>';?></a>
            <div class="description">
                <span class="text"><?php echo(substr($this->Instagram->getLastPic()->caption->text,0,240));?>[...]</span>
            </div>
        </div>
        <div class="display">
            <?php foreach($this->Instagram->getPics() as $i=>$data):?>
                <?php if($i>0 && $i<9):?>
                    <div class="item">
                        <a href="<?=$data->link?>" target="_blank"><?='<img src="'.$data->images->standard_resolution->url.'"/>';?></a>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</div>