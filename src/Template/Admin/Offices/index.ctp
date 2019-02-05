<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Janelas modais</h4>
          <p class="category">popups</p>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('class', ['label'=>'Conteúdo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Criado em']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label'=>'Status']) ?></th>
                
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($offices as $office): ?>
                <tr>
                  <td><?= $this->Number->format($office->id) ?></td>
                  <td><?= $office->name; ?></td>
                  <td><?= $office->class; ?></td>
                  <td><?= $office->created; ?></td>
                  <td>
                    <div class="switch__container">
                      <input id="switch-flat-<?=$office->id?>" class="switch switch--flat" uid="<?=$office->id?>" type="checkbox" <?=$office->status==1?"checked":""?> onclick="changeStatus('offices', 'status', $(this).attr('uid'));">
                      <label for="switch-flat-<?=$office->id?>" class="general-switch"></label>
                    </div>
                  </td>
                  
                  <td class="actions">
                    <?php //= $this->Html->link(__('Ver'), ['action' => 'view', $office->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $office->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $office->id], ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]) ?>
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
            <p><?= $this->Paginator->counter(['format' => __('Page {{office}} of {{offices}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
