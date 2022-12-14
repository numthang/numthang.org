<script type="text/template" data-group-palette-template>
    <div class="popover-head">
        <h3><?= e(trans($prompt)) ?></h3>
        <button type="button" class="btn-close"
            data-dismiss="popover"
            aria-label="<?= __("Close") ?>"></button>
    </div>
    <div class="popover-fixed-height field-repeater-selection-list">
        <div class="control-scrollpad" data-control="scrollpad">
            <div class="scroll-wrapper">

                <div class="control-filelist filelist-hero" data-control="filelist">
                    <ul>
                        <?php foreach ($groupDefinitions as $item): ?>
                            <li class="<?= $item['description'] ? '' : 'no-description' ?>">
                                <a
                                    href="javascript:;"
                                    data-repeater-add
                                    data-request="<?= $this->getEventHandler('onAddItem') ?>"
                                    data-request-data="_repeater_group: '<?= $item['code'] ?>'">
                                    <i class="list-icon <?= $item['icon'] ?>"></i>
                                    <span class="title"><?= e(trans($item['name'])) ?></span>
                                    <span class="description"><?= e(trans($item['description'])) ?></span>
                                    <span class="borders"></span>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</script>
