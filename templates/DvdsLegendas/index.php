<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DvdsLegenda[]|\Cake\Collection\CollectionInterface $dvdsLegendas
 */
?>
<div class="dvdsLegendas index content">
    <?= $this->Html->link(__('New Dvds Legenda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dvds Legendas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('dvds_id') ?></th>
                    <th><?= $this->Paginator->sort('legendas_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dvdsLegendas as $dvdsLegenda): ?>
                <tr>
                    <td><?= $dvdsLegenda->has('dvd') ? $this->Html->link($dvdsLegenda->dvd->id_dvd, ['controller' => 'Dvds', 'action' => 'view', $dvdsLegenda->dvd->id_dvd]) : '' ?></td>
                    <td><?= $dvdsLegenda->has('legenda') ? $this->Html->link($dvdsLegenda->legenda->id_legenda, ['controller' => 'Legendas', 'action' => 'view', $dvdsLegenda->legenda->id_legenda]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dvdsLegenda->legendas_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dvdsLegenda->legendas_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dvdsLegenda->legendas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dvdsLegenda->legendas_id)]) ?>
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
