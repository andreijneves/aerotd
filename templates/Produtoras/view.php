<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produtora $produtora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produtora'), ['action' => 'edit', $produtora->id_produtora], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produtora'), ['action' => 'delete', $produtora->id_produtora], ['confirm' => __('Are you sure you want to delete # {0}?', $produtora->id_produtora), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtoras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produtora'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtoras view content">
            <h3><?= h($produtora->id_produtora) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($produtora->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produtora') ?></th>
                    <td><?= $this->Number->format($produtora->id_produtora) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
