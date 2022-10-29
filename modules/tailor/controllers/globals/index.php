<?php if (!$this->fatalError): ?>
    <?php Block::put('breadcrumb') ?>
        <ul>
            <li><a href="<?= Backend::url('tailor/globals/'.$activeSource->handleSlug) ?>"><?= $activeSource->name ?></a></li>
            <li><?= e(trans($this->pageTitle)) ?></li>
        </ul>
    <?php Block::endPut() ?>

    <?= Form::open(['class' => 'layout']) ?>

        <div class="layout-row">
            <div class="mw-950">
                <?= $this->formRender() ?>
            </div>
        </div>

        <div class="form-buttons">
            <div class="loading-indicator-container">
                <button
                    type="submit"
                    data-request="onSave"
                    data-request-data="redirect:0"
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('backend::lang.form.saving_name', ['name'=>$entityName])) ?>"
                    class="btn btn-primary">
                    <?= __('Save Changes') ?>
                </button>
                <button
                    type="button"
                    class="oc-icon-trash-o btn-icon danger pull-right"
                    data-request="onDelete"
                    data-load-indicator="<?= e(trans('backend::lang.form.deleting_name', ['name'=>$entityName])) ?>"
                    data-request-confirm="<?= e(trans('backend::lang.form.confirm_delete')) ?>">
                </button>
                <span class="btn-text">
                    <?= e(trans('backend::lang.form.or')) ?>
                    <a href="<?= Backend::url('tailor/globals/'.$activeSource->handleSlug) ?>">
                        <?= e(trans('backend::lang.form.cancel')) ?>
                    </a>
                </span>
            </div>
        </div>

    <?= Form::close() ?>

<?php else: ?>

    <p class="flash-message static error"><?= e(trans($this->fatalError)) ?></p>
    <p><a href="<?= Backend::url('tailor/globals') ?>" class="btn btn-default">Return to Globals</a></p>

<?php endif ?>
