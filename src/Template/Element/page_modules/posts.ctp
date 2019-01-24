<div class="section_interna">
    <div class="wrapper">
        <ul class="list_news">
            <?php foreach($posts as $post):?>
            <h3><a href="/ler/<?=$post->slug;?>"><?=$post->title;?></a></h3>
            <div class="content_news">
                <p><?=$post->description;?></p>
            </div>
            <?php endforeach;?>
        </ul>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('próximo') . ' >') ?>
                <?= $this->Paginator->last(__('último') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}}')]) ?></p>
        </div>
    </div>
</div>

