<?php
/**
 * Copyright (c) 2014-2018, yunsheji.cc
 * All right reserved.
 *
 * @since 1.1.0
 * @package Marketing
 * @author 云设计
 * @date 2018/02/14 10:00
 * @link https://yunsheji.cc
 */
?>
<?php if(tt_get_option('tt_enable_post_comment_top_banner', false)) { ?>
    <section class="ttgg" id="ttgg-9">
        <div class="tg-inner">
            <?php echo tt_get_option('tt_post_comment_top_banner'); ?>
        </div>
    </section>
<?php } ?>