<footer id="footer">
    <div class="menu">
        <div class="wrapper">
            <div class="item_list">
                <ul class="item">
                    <?php foreach($menu as $key=>$parent): ?>
                    <?php if($parent->status && $parent->footer):?>
                    <li><a class="scrollSuave" <?=$parent->url!=""?"href='".$parent->url."'":''?>> <?=$parent->title?></a></li>
                    <?php endif; ?>
                    <?php if($key==3):?>
                        </ul>
                        <ul class="item">
                    <?php endif;?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="media">
                <div class="logo">
                    <?=$this->Html->image('Site.../images/logo.png');?>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/LutapelaPaz/" target="_blank"><?=$this->Html->image('Site.../images/facebook.png');?></a>
                    <a href="https://twitter.com/lutapelapaz/" target="_blank"><?=$this->Html->image('Site.../images/twitter.png');?></a>
                    <a href="https://www.instagram.com/lutapelapaz/" target="_blank"><?=$this->Html->image('Site.../images/instagram.png');?></a>
                    <a href="https://www.youtube.com/user/LutapelaPazBrasil/" target="_blank"><?=$this->Html->image('Site.../images/youtube.png');?></a>
                </div>
            </div>
            <div class="box">
                <div class="div-strong-dark-blue">
                    <p class="color-white"><?=__("Você faz parte de uma organização filiada à Aliança Luta Pela Paz? Faça seu login e acesse nossa rede! :)");?></p><br>
                    <a href="https://fightforpeace.filecamp.com/" class="btn-dark-blue"><?=__("ACESSAR ALIANÇA LPP");?></a>
                </div>
            </div>
        </div>
    </div>
</footer>