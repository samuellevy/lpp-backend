<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Eventos</h4>
          <p class="category">timeline</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year', ['label'=>'Ano']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', ['label'=>'Descrição']) ?></th>
                <!--th scope="col"><?= $this->Paginator->sort('tipo', ['label'=>'Status']) ?></th-->
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($timeline as $event): ?>
                <tr>
                  <td><?= $this->Number->format($event->id) ?></td>
                  <td><?= h($event->year) ?></td>
                  <td><?= h($event->description) ?></td>
                  <td class="actions">
                    <?php //= $this->Html->link(__('Ver'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <div class="paginator">
            <ul class="pagination">
              <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
              <?= $this->Paginator->prev('< ' . __('anterior')) ?>
              <?= $this->Paginator->numbers() ?>
              <?= $this->Paginator->next(__('próximo') . ' >') ?>
              <?= $this->Paginator->last(__('último') . ' >>') ?>
              <li><a href="<?= $this->Url->build(["action" => "add"]);?>">Novo</a></li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
