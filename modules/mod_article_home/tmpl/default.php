<?php
defined('_JEXEC') or die;

$sufixo = '';
if ($params->get('moduleclass_sfx')) {
    $sufixo = '-' . $params->get('moduleclass_sfx');
}
?>
<div id="article-home" class="article-home<?php echo $sufixo; ?>">
    <div class="article-home">
        <?php foreach ($articles as $key => $article) : ?>
            <?php
                $images = json_decode($article->images);
                $key = $key + 1;
                $link = ${"link$key"};
                ?>

            <div class="description">
                <a href="<?php echo JRoute::_("index.php?Itemid={$link}"); ?>">
                    <img src="<?= $images->image_intro ?>" alt="<?= $article->title ?>" />
                </a>
                <h1>
                    <a href="<?php echo JRoute::_("index.php?Itemid={$link}"); ?>">
                        <?= $article->title ?>
                    </a>
                </h1>
                <div class="text-description">
                    <a href="<?php echo JRoute::_("index.php?Itemid={$link}"); ?>">
                        <?php
                            $start = strpos($article->introtext, '<p>');
                            $end = strpos($article->introtext, '</p>', $start);
                            $paragraph = substr($article->introtext, $start, $end - $start + 4);
                            ?>
                        <?= $paragraph ?>

                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    jQuery('document').ready(function($) {
        $(window).on('resize', function() {
            $('#article-home .destination').height(parseInt($('#article-home .destination').width() * 0.6));
            $('#article-home .description').height($('#article-home .all-destination').height());
        }).trigger('resize');
    });
</script>