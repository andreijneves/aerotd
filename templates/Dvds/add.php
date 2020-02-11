<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dvd $dvd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Lista de Dvds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dvds form content">
            <?= $this->Form->create($dvd) ?>
            <fieldset>
                <legend><?= __('Add Dvd') ?></legend>
                <?php
                    echo $this->Form->control('produtoras_id', ['options' => $produtoras]);
                    echo $this->Form->control('ano');
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('sinopse');
                    echo $this->Form->control('legendas._ids', ['options' => $legendas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
