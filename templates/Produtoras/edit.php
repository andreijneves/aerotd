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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produtora->id_produtora],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produtora->id_produtora), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Produtoras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtoras form content">
            <?= $this->Form->create($produtora) ?>
            <fieldset>
                <legend><?= __('Edit Produtora') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
