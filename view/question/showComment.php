<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
?>
<?php foreach ($comments as $comment) :
    $parsed   = $filter->parse($comment->text, ["shortcode", "markdown"]);?>
    <div class="comment">
        <div class ="aUser">
            <p class="qAcro"><strong><?= $comment->user ?></strong></p>
            <img class="aUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim("ponteman@live.se"))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
            <p class="qCreated"><?= $comment->created ?></p>
        </div>
        <div class="cText"><?= $parsed->text ?></div>
    </div>
<?php endforeach; ?>
