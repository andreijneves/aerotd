<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dvd $dvd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dvd'), ['action' => 'edit', $dvd->id_dvd], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dvd'), ['action' => 'delete', $dvd->id_dvd], ['confirm' => __('Are you sure you want to delete # {0}?', $dvd->id_dvd), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dvds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dvd'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dvds view content">
            <h3><?= h($dvd->id_dvd) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produtora') ?></th>
                    <td><?= $dvd->has('produtora') ? $this->Html->link($dvd->produtora->id_produtora, ['controller' => 'Produtoras', 'action' => 'view', $dvd->produtora->id_produtora]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($dvd->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Dvd') ?></th>
                    <td><?= $this->Number->format($dvd->id_dvd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= $this->Number->format($dvd->ano) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Sinopse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dvd->sinopse)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Legendas') ?></h4>
                <?php if (!empty($dvd->legendas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Legenda') ?></th>
                            <th><?= __('Lingua') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dvd->legendas as $legendas) : ?>
                        <tr>
                            <td><?= h($legendas->id_legenda) ?></td>
                            <td><?= h($legendas->lingua) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Legendas', 'action' => 'view', $legendas->id_legenda]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Legendas', 'action' => 'edit', $legendas->id_legenda]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Legendas', 'action' => 'delete', $legendas->id_legenda], ['confirm' => __('Are you sure you want to delete # {0}?', $legendas->id_legenda)]) ?>
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
