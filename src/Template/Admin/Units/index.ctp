<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Unidades</h4>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>'Nome']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('address', ['label'=>'Endereço']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('location', ['label'=>'Location']) ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($units as $unit): ?>
                <tr>
                  <td><?= $this->Number->format($unit->id) ?></td>
                  <td><?= h($unit->name) ?></td>
                  <td><?= h($unit->address) ?></td>
                  <td><?= h($unit->location) ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $unit->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id)]) ?>
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
              <li><a href="<?= $this->Url->build(["controller" => "units", "action" => "add"]);?>">Novo</a></li>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{unit}} of {{units}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
