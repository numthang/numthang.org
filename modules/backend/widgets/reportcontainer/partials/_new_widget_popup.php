<?= Form::open([
    'data-request' => $this->getEventHandler('onAddWidget'),
    'data-request-success' => "\$(this).trigger('close.oc.popup'); \$(window).trigger('oc.reportWidgetAdded')",
    'data-popup-load-indicator' => true
]) ?>
    <div class="modal-header">
        <h4 class="modal-title"><?= e(trans('backend::lang.dashboard.add_widget')) ?></h4>
        <button type="button" class="btn-close" data-dismiss="popup"></button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label><?= e(trans('backend::lang.dashboard.widget_label')) ?></label>
            <select class="form-control custom-select" name="className" data-placeholder="<?= e(trans('backend::lang.form.select_placeholder')) ?>">
                <option></option>
                <?php foreach ($widgets as $className => $widgetInfo):?>
                    <option value="<?= e($className) ?>"><?= isset($widgetInfo['label']) ? e(trans($widgetInfo['label'])) : $className ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <label><?= e(trans('backend::lang.dashboard.widget_width')) ?></label>
            <select class="form-control custom-select" name="size">
                <option></option>
                <?php foreach ($sizes as $size => $name):?>
                    <option value="<?= e($size) ?>" <?= $size == 12 ? 'selected' : null ?>><?= e($name) ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button
            type="submit"
            class="btn btn-primary">
            <?= e(trans('backend::lang.form.add')) ?>
        </button>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>
    </div>
<?= Form::close() ?>
