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
                <th scope="col"><?= $this->Paginator->sort('title', ['label'=>'Título']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('content', ['label'=>'Conteúdo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Criado em']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label'=>'Status']) ?></th>
                
                <th scope="col" class="actions"><?= __('Opções') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($modals as $modal): ?>
                <tr>
                  <td><?= $this->Number->format($modal->id) ?></td>
                  <td><?= $modal->title; ?></td>
                  <td><?= $modal->content; ?></td>
                  <td><?= $modal->created; ?></td>
                  <td>
                    <div class="switch__container">
                      <input id="switch-flat-<?=$modal->id?>" class="switch switch--flat" uid="<?=$modal->id?>" type="checkbox" <?=$modal->status==1?"checked":""?> onclick="changeStatus('modals', 'status', $(this).attr('uid'));">
                      <label for="switch-flat-<?=$modal->id?>" class="general-switch"></label>
                    </div>
                  </td>
                  
                  <td class="actions">
                    <?php //= $this->Html->link(__('Ver'), ['action' => 'view', $modal->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $modal->id]) ?>
                    <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $modal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modal->id)]) ?>
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
            <p><?= $this->Paginator->counter(['format' => __('Page {{modal}} of {{modals}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
