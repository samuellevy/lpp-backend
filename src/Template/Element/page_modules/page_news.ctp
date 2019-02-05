

<div class="news">
    <?php if(isset($post['capas'][0]['filename'])):?>
    <div class="webdoor_news">
        <?php echo $this->Html->image('../uploads/files/'.$post['capas'][0]['filename']);?>
    </div>
    <?php endif;?>
    
    <div class="wrapper">
        <div class="filter_bg"></div>
        <div class="content_title">
            <h1><?=$post->title;?></h1>
            <p><?=$post->description;?></p>
            <div class="content_links">
                <div class="publicado"><span>Publicado em <?=$post->created;?></span></div>
                <div class="media"><span>Compartilhe:</span>
                    <div class="twitter">
                        <?php echo $this->Html->image('Site.../images/twitter_news.png');?>
                        <a onclick="window.open('http://twitter.com/share?text=<?=$post->description;?>&url=<?=$this->Url->build('/ler/'.$post->slug, true);?>&hashtags=#FightForPeace','popUpWindow','height=500,width=600,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');">Twitter</a>
                    </div>
                    <div class="facebook" id="facebook-btn">
                        <?php echo $this->Html->image('Site.../images/facebook_news.png');?>
                        <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?=$this->Url->build('/ler/'.$post->slug, true);?>','popUpWindow','height=500,width=600,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');">Facebook</a>
                    </div>
                    <div class="whatsapp">
                        <?php echo $this->Html->image('Site.../images/whatsapp_news.png');?>
                        <a href="whatsapp://send?text=<?=$this->Url->build('/ler/'.$post->slug, true);?>" data-action="share/whatsapp/share">Whatsapp</a>
                    </div>
                </div>
            </div>
            <div class="content_text">
                <p><?=$post->content;?></p>
                <div class="content_links-bottom">
                    <div class="media"><span>Compartilhe:</span>
                        <div class="twitter">
                            <?php echo $this->Html->image('Site.../images/twitter_news.png');?>
                            <a onclick="window.open('http://twitter.com/share?text=<?=$post->description;?>&url=<?=$this->Url->build('/ler/'.$post->slug, true);?>&hashtags=#FightForPeace','popUpWindow','height=500,width=600,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');">Twitter</a>
                        </div>
                        <div class="facebook">    
                            <?php echo $this->Html->image('Site.../images/facebook_news.png');?>
                            <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?=$this->Url->build('/ler/'.$post->slug, true);?>','popUpWindow','height=500,width=600,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no, status=yes');">Facebook</a>
                        </div>
                        <div class="whatsapp">
                            <?php echo $this->Html->image('Site.../images/whatsapp_news.png');?>
                            <a href="whatsapp://send?text=<?=$this->Url->build('/ler/'.$post->slug, true);?>" data-action="share/whatsapp/share">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_news">
        <div class="wrapper">
            <h1>Notícias Relacionadas</h1>
            <div class="box">
                <?php foreach($posts as $post):?>
                <div class="item">
                    <div class="media">
                        <?php echo $this->Html->image('../uploads/files/'.$post['files'][0]['filename'], ['class'=>'form-img', 'data-uid'=>$post['files'][0]['id']]);?>
                    </div>
                    <div class="content">
                        <div class="square_content">
                            <div class="square square-red"></div><span class="color-red"><?=$post->blog_category->category;?></span>
                        </div>
                        <h3 class="color-navy-blue"><?=$post->title;?></h3>
                        <a href="/ler/<?=$post->slug;?>"><p class="color-light-grey"><?=$post->description;?></p><span class="color-red">SAIBA MAIS ></span></a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>