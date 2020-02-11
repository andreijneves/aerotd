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
            <?= $this->Html->link(__('List Dvds Legendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dvdsLegendas form content">
            <?= $this->Form->create($dvdsLegenda) ?>
            <fieldset>
                <legend><?= __('Add Dvds Legenda') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
