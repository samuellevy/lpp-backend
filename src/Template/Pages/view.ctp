<?php foreach($page->pages_components as $key=>$component):?>
<?php if($component->component->type == 'editor' && $component->component->mode == 'banner'):?>
<div class="webdoor_principal" data-id="<?=$key;?>" data-class="<?=$component->class;?>" data-size="<?=$component->description;?>">
    <?=str_replace('<p>', '', str_replace('</p>', '', $component->content));?>
</div>

<?php elseif($component->component->type == 'module'):?>
<article class="<?=$component->class;?>">
    <?=$this->element("page_modules/".$component->content, ['component'=>$component]);?>
</article>

<?php elseif($component->component->type == 'editor' && $component->component->mode == 'text'):?>
<section class='section_interna <?=$page->slug;?> <?=$component->class;?>'>
    <div class="wrapper">
        <?=$component->content;?>
    </div>
</section>

<?php elseif($component->component->type == 'editor' && $component->component->mode == 'card'):?>
<section class='search_home <?=$component->slug?>'>
    <div class="wrapper">
        <div class='<?=$component->class;?>'>
            <?=$component->content;?>
        </div>
    </div>
</section>

<?php elseif($component->component->type == 'block' && $component->component->mode == 'outer'):?>
<section class='search_home <?=$page->slug?>'>
    <div class="wrapper">
        <div class='<?=$component->class;?>'>
            <?php
            $selects = explode(',',$component->content);
            foreach($selects as $select):
            ?>
            <a href="/ler/<?=$top_posts[$select]->slug;?>">  
                <div>
                    <h4><?=$top_posts[$select]->blog_category->category;?></h4>
                    <p><?=$top_posts[$select]->title;?></p>
                    <?php echo $this->Html->image('../uploads/files/'.$top_posts[$select]['miniaturas'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$top_posts[$select]['miniaturas'][0]['id']]);?>
                </div>
            </a>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<?php elseif($component->component->type == 'banner' && $component->component->mode == 'inputs'):?>
<section class="<?=$page->slug?>">
        <?php if(count($component->banners)===1):?>
            <div class="webdoor_principal" data-id="3" data-class="<?=$component->banners[0]->class;?>" data-size="">
                <?php echo $this->Html->image('../uploads/files/'.$component->banners[0]->file->filename, ['class'=>'scaled-img', 'data-uid'=>$component->banners[0]->file->id]);?>
                <div class="filter_bg"></div>
                <div class="wrapper">
                    <div class="content_text right ">
                        <h2 class="<?=$component->banners[0]->class;?>"><?=$component->banners[0]->title;?></h2>
                        <p style="background-color: transparent;">
                            <?=$component->banners[0]->text;?>
                        </p>
                        <a href="<?=$component->banners[0]->url;?>" target="_blank" class="<?=$component->banners[0]->class;?>"><?=$component->banners[0]->text_button;?></a>
                    </div>
                </div>
            </div>
        <?php elseif(count($component->banners)>1):?>
        <div class="webdoor_slider">
            <div class="box_slider">
                <?php foreach($component->banners as $banner):?>
                    <div class="item">
                        <?php echo $this->Html->image('../uploads/files/'.$banner['file']['filename'], ['class'=>'scaled-img', 'data-uid'=>$banner['file']['id']]);?>
                        <div class="filter_bg"></div>
                        <div class="wrapper">
                            <div class="conntent_text right <?=$banner->class;?>">
                                <h2><?=$banner->title;?></h2>
                                <p><?=$banner->text;?></p><a href="<?=$banner->url?>" target="_blank"><?=$banner->text_button?></a>
                            </div> 
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif;?>
</section>
<?php endif;?>
<?php endforeach;?>

<?php if(isset($modals)):?>
<?php foreach($modals as $modal):?>
<div id="dialog" title="<?=$modal->title?>">
    <?=$modal->content?>
</div>
<?php endforeach;?>
<script>
    $(document).ready(function(){
        $('#dialog').dialog('open');
    });
</script>
<?php endif;?>
