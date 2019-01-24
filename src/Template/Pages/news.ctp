<?php //die(debug($post['capas']));?>
<?php if(isset($post['capas'][0]['filename'])):?>
<div id="banner">
    <div class="wrapper">
        <div class="webdoor_home">
            <?php echo $this->Html->image('../uploads/files/'.$post['capas'][0]['filename'], ['style'=>'width: 1440px; height: 520px;']);?>
        </div>
    </div>
</div>
<?php endif;?>

<section class='section_interna <?=$post->slug?>'>
    <div class="wrapper">
        <h2><?=$post->title;?></h2>
        <?=$post->content;?>
    </div>
</section>