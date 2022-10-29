<?php Block::put('breadcrumb') ?>
    <ul>
        <li><a href="<?= Backend::url('tailor/entries/'.$this->activeSource->handleSlug) ?>"><?= $this->activeSource->name ?></a></li>
        <li><?= e(trans($this->pageTitle)) ?></li>
    </ul>
<?php Block::endPut() ?>

<?= Form::open(['class' => 'layout']) ?>

    <div class="layout-row">
        <?= $this->importRender() ?>
    </div>

    <div class="form-buttons">
        <button
            type="submit"
            data-control="popup"
            data-handler="onImportLoadForm"
            data-keyboard="false"
            class="btn btn-primary">
            <?= __("Import Entries") ?>
        </button>
    </div>

<?= Form::close() ?>
