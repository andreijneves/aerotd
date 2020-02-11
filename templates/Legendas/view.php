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
            <?= $this->Html->link(__('Edit Legenda'), ['action' => 'edit', $legenda->id_legenda], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Legenda'), ['action' => 'delete', $legenda->id_legenda], ['confirm' => __('Are you sure you want to delete # {0}?', $legenda->id_legenda), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Legendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Legenda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="legendas view content">
            <h3><?= h($legenda->id_legenda) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lingua') ?></th>
                    <td><?= h($legenda->lingua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Legenda') ?></th>
                    <td><?= $this->Number->format($legenda->id_legenda) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Dvds') ?></h4>
                <?php if (!empty($legenda->dvds)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Dvd') ?></th>
                            <th><?= __('Produtoras Id') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Sinopse') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($legenda->dvds as $dvds) : ?>
                        <tr>
                            <td><?= h($dvds->id_dvd) ?></td>
                            <td><?= h($dvds->produtoras_id) ?></td>
                            <td><?= h($dvds->ano) ?></td>
                            <td><?= h($dvds->titulo) ?></td>
                            <td><?= h($dvds->sinopse) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dvds', 'action' => 'view', $dvds->id_dvd]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dvds', 'action' => 'edit', $dvds->id_dvd]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dvds', 'action' => 'delete', $dvds->id_dvd], ['confirm' => __('Are you sure you want to delete # {0}?', $dvds->id_dvd)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
