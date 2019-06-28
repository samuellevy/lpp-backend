

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
                <div class="publicado"><span><?=__("Publicado em");?> <?=$post->created;?></span></div>
                <div class="media"><span><?=__("Compartilhe");?>:</span>
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
                    <div class="media"><span><?=__("Compartilhe")?>:</span>
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
    <?=$this->element('page_modules/block_news');?>
</div>