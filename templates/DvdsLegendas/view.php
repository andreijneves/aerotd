<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DvdsLegenda $dvdsLegenda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dvds Legenda'), ['action' => 'edit', $dvdsLegenda->legendas_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dvds Legenda'), ['action' => 'delete', $dvdsLegenda->legendas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dvdsLegenda->legendas_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dvds Legendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dvds Legenda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dvdsLegendas view content">
            <h3><?= h($dvdsLegenda->legendas_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dvd') ?></th>
                    <td><?= $dvdsLegenda->has('dvd') ? $this->Html->link($dvdsLegenda->dvd->id_dvd, ['controller' => 'Dvds', 'action' => 'view', $dvdsLegenda->dvd->id_dvd]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Legenda') ?></th>
                    <td><?= $dvdsLegenda->has('legenda') ? $this->Html->link($dvdsLegenda->legenda->id_legenda, ['controller' => 'Legendas', 'action' => 'view', $dvdsLegenda->legenda->id_legenda]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
