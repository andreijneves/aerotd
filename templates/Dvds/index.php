<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dvd[]|\Cake\Collection\CollectionInterface $dvds
 */
?>
<div class="dvds index content">
    <?= $this->Html->link(__('Adicionar DVD'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dvds') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_dvd') ?></th>
                    <th><?= $this->Paginator->sort('produtoras_id') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th> Legendas </th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dvds as $dvd): ?>
                <tr>
                    <td><?= $this->Number->format($dvd->id_dvd) ?></td>
                    <td><?= $dvd->has('produtora') ? $this->Html->link($dvd->produtora->nome, ['controller' => 'Produtoras', 'action' => 'view', $dvd->produtora->id_produtora]) : '' ?></td>
                    <td><?= $dvd->ano ?></td>
                    <td><span class='td_ver_legenda' data-dvd_id="<?=$dvd->id_dvd?>">Ver Legendas</span></td>
                    <td><?= $dvd->titulo ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dvd->id_dvd]) ?>
                        <?= $this->Form->postLink(__('Remover'), ['action' => 'delete', $dvd->id_dvd], ['confirm' => __('Are you sure you want to delete # {0}?', $dvd->id_dvd)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('<<')) ?>
            <?= $this->Paginator->prev('< ' . __('<')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('>') . ' >') ?>
            <?= $this->Paginator->last(__('>>') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pg. {{page}} de {{pages}}, Mostrando {{current}} Dvds de {{count}}')) ?></p>
    </div>
</div>
<script src="./js/jquery.js"></script>
<script src="./js/aerotd.js"></script>