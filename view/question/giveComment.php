<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($replyTo->text, ["shortcode", "markdown"]);
?>
<h1>Lägg en kommentar</h1>
<div class="answer">
    <div class ="aUser">
        <p class="qAcro"><strong><?= $userInfo->acronym ?></strong></p>
        <img class="aUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($userInfo->email))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
        <p class="qCreated"><?= $replyTo->created ?></p>
    </div>
    <p class="aText"><?= $parsed->text ?></p>
</div>

<?= $content ?>
