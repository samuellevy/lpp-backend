<div class="gallery">
    <div class="box">
        <div class="media">
            <?='<img src="'.$this->Instagram->getLastPic()->images->standard_resolution->url.'"/>';?>
        </div>
        <div class="display">
            <?php foreach($this->Instagram->getPics() as $i=>$data):?>
                <?php if($i>0 && $i<9):?>
                    <div class="item">
                        <?='<img src="'.$data->images->standard_resolution->url.'"/>';?>                    
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</div>