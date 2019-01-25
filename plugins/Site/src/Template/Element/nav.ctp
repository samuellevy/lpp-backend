<nav class="list_menu">
    <ul>
    <!-- <li><a href="#">QUEM SOMOS</a></li>
    <li><a href="#">O QUE FAZEMOS</a></li>
    <li><a href="#">NOSSAS CONQUISTAS</a></li>
    <li><a href="#">FALE CONOSCO</a></li>
    <li><a href="#">COMO COLABORAR</a></li>
    <li><a href="">APOIE NOSSA LUTA</a></li> -->
    <?php foreach($menu as $parent): ?>
        <?php if($parent->status && $parent->top):?>
            <li><a <?=$parent->url!=""?"href='".$parent->url."'":''?> > <?=$parent->title?></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</nav>