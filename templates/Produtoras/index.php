<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produtora[]|\Cake\Collection\CollectionInterface $produtoras
 */
?>
<div class="produtoras index content">
    <?= $this->Html->link(__('New Produtora'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produtoras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('id_produtora') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtoras as $produtora): ?>
                <tr>
                    <td><?= h($produtora->nome) ?></td>
                    <td><?= $this->Number->format($produtora->id_produtora) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produtora->id_produtora]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produtora->id_produtora]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produtora->id_produtora], ['confirm' => __('Are you sure you want to delete # {0}?', $produtora->id_produtora)]) ?>
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
