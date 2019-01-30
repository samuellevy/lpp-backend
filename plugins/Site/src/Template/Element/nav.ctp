<nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox"><span></span><span></span><span></span>
        <a href="/home"><div class="logo"><?=$this->Html->image('Site.../images/logo.png');?></div></a>
        <ul id="menu"><a href="#">
        <?php foreach($menu as $key=>$parent): ?>
            <?php if($parent->status && $parent->top):?>
                <a <?=$parent->url!=""?"href='".$parent->url."'":''?> class="<?=$parent->featured?'btn_desktop':'';?> <?=$parent->just_mobile?'mobile':'';?>"> <li><?=$parent->title?></li></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</nav>