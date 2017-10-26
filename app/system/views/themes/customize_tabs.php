<?php
$type = $tabs->section;
?>
<div
    class="panel panel-group"
    role="tablist"
    aria-multiselectable="true">

    <div
        id="<?= $this->getId() ?>"
        class="panel-body">
        <?php $index = 0;
        foreach ($tabs as $name => $fields) { ?>
            <? $index++; ?>
            <div class="panel panel-inverse panel-form">
                <div class="panel-heading <?= $index == 1 ? '' : 'collapsed' ?>"
                     role="button"
                     data-toggle="collapse"
                     data-parent="#<?= $this->getId() ?>"
                     data-target="#<?= $this->getId('section-'.$index) ?>"
                     aria-expanded="true"
                     aria-controls="<?= $this->getId('section-'.$index) ?>"
                >
                    <h4 class="panel-title"><?= e(lang($name)) ?></h4>
                </div>
                <div
                    id="<?= $this->getId('section-'.$index) ?>"
                    class="panel-collapse collapse <?= $index == 1 ? 'in' : '' ?>"
                    role="tabpanel"
                    aria-labelledby="<?= $this->getId('section-heading-'.$index) ?>"
                >
                    <div class="panel-body">
                        <?= $this->makePartial('form/form_fields', ['fields' => $fields]) ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>