<nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox"><span></span><span></span><span></span>
        <div class="logo"><?=$this->Html->image('Site.../images/logo.png');?></div>
        <ul id="menu"><a href="#">
        <?php foreach($menu as $parent): ?>
            <?php if($parent->status && $parent->top):?>
                <a <?=$parent->url!=""?"href='".$parent->url."'":''?> > <li><?=$parent->title?></li></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</nav>