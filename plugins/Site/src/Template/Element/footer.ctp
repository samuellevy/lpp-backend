<?php
//option one
echo $full_footer->content;
?>

<!-- <footer id="footer">
    <div class="menu">
        <div class="wrapper">
            <div class="logo">
                <?=$this->Html->image('Site.../images/logo.png');?>
            </div>
            <?php foreach($menu as $parent): ?>
                <?php if($parent->footer):?>
                    <div class="item_list">
                        <h5 class="title_footer"><?=$parent->title?></h5>
                        <ul class="item">
                            <?php foreach($parent->child_menu as $child):?>
                                <li><a href="<?= $this->Url->build($child->url);?>" alt=""><?=$child->title?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif;?>
            <?php endforeach; ?>
        
            <div class="ad">
                <h5 class="title_footer">Patrocinadoras</h5>
                <div class="media">
                    <a target="_blank" href="http://www.cedae.com.br"><?=$this->Html->image('Site.../images/logo_footer.png');?></a>
                    <a target="_blank" href="http://www.prece.com.br"><?=$this->Html->image('Site.../images/prece.png');?></a>
                    </div>
            </div>
            <div class="certificacion">
                <div class="media">
                    <a target="_blank" href="http://www.ans.gov.br/"><?=$this->Html->image('Site.../images/colorida.png');?></a>
                    <a target="_blank" href="http://www.ans.gov.br/"><?=$this->Html->image('Site.../images/ans.png');?></a>
                    </div>
            </div>
        </div>
    </div>
    <div class="adress">
        <div class="wrapper">
            <?=$footer_presentation->content;?>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper"><a href="#"><?=$this->Html->image('Site.../images/santa-fe-ideias.png');?></a>
            <p>®Todos os direitos reservados</p>
        </div>
    </div>
</footer> -->