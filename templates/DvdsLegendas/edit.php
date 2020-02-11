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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dvdsLegenda->legendas_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dvdsLegenda->legendas_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dvds Legendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dvdsLegendas form content">
            <?= $this->Form->create($dvdsLegenda) ?>
            <fieldset>
                <legend><?= __('Edit Dvds Legenda') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
