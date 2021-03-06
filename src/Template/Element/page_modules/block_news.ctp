<div class="section_news">
    <h1><?=__("Notícias");?></h1>
    <div class="box">
        <?php foreach($posts as $post):?>
        <div class="item">
            <div class="media">
            <a href="/ler/<?=$post->slug;?>"><?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$post['files'][0]['id']]);?></a>
            </div>
            <div class="content">
                <div class="square_content">
                    <div class="square square-red"></div><span class="color-red"><?=$post->blog_category->category;?></span>
                </div>
                <h3 class="color-navy-blue"><?=$post->title;?></h3>
                <a href="/ler/<?=$post->slug;?>"><p class="color-light-grey"><?=$post->description;?></p><span class="color-red"><?=__("SAIBA MAIS");?> > </span></a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>