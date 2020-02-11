<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Legenda $legenda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Legendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legendas form content">
            <?= $this->Form->create($legenda) ?>
            <fieldset>
                <legend><?= __('Add Legenda') ?></legend>
                <?php
                    echo $this->Form->control('lingua');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
