<?php foreach($page->pages_components as $component):?>
    <?php if($component->component->type == 'editor' && $component->component->mode == 'banner'):?>
    <div class="webdoor_principal">
        <?=str_replace('<p>', '', str_replace('</p>', '', $component->content));?>
        <div class="filter_bg"></div>
        <div class="wrapper">
            <div class="conntent_text">
            <h2>Por um mundo com mais paz, justiça e solidariedade</h2>
            <p>A Luta pela Paz é uma organização internacional sem fins lucrativos que tem como missão realizar o potencial de jovens trabalhando com eles pela prevenção da violência nas comunidades em que vivem.</p><a href="#">Apoie nossa Luta </a>
            </div>
        </div>
    </div>

    <?php elseif($component->component->type == 'module'):?>
    <article class="<?=$component->class;?>">
        <?=$this->element("page_modules/".$component->content, ['component'=>$component]);?>
    </article>

    <?php elseif($component->component->type == 'editor' && $component->component->mode == 'text'):?>
    <section class='section_interna <?=$page->slug?>'>
        <div class="wrapper">
            <?=$component->content;?>
        </div>
    </section>

    <?php elseif($component->component->type == 'editor' && $component->component->mode == 'card'):?>
    <section class='search_home <?=$page->slug?>'>
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
