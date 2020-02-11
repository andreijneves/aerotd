<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Legenda[]|\Cake\Collection\CollectionInterface $legendas
 */
?>
<div class="legendas index content">
    <?= $this->Html->link(__('New Legenda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Legendas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_legenda') ?></th>
                    <th><?= $this->Paginator->sort('lingua') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($legendas as $legenda): ?>
                <tr>
                    <td><?= $this->Number->format($legenda->id_legenda) ?></td>
                    <td><?= h($legenda->lingua) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $legenda->id_legenda]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $legenda->id_legenda]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $legenda->id_legenda], ['confirm' => __('Are you sure you want to delete # {0}?', $legenda->id_legenda)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
