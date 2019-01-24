<nav>
    <div id="menu-toogle">
        <input type="checkbox"><span></span><span></span><span></span>
    </div>
    <ul>
        <?php foreach($menu as $parent): ?>
        <?php if($parent->status && $parent->top):?>
        <li><a <?=$parent->url!=""?"href='".$parent->url."'":''?> > <?=$parent->title?></a>
            <div class="dropdown-content">
                <ul>
                    <?php foreach($parent->child_menu as $child):?>
                        <?php if($child->status):?>
                            <li><a href="<?= $this->Url->build($child->url);?>" alt=""><?=$child->title?></a></li>
                        <?php endif; ?>
                    <?php endforeach;?>
                </ul>
            </div>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
        <li> <a class="last_icon" href="<?=$top_ouvidoria->content;?>" alt="">Fale com a Ouvidoria</a></li><a class="login" href="<?=$top_signin->content;?>" alt="">Entrar</a>
    </ul>
</nav>