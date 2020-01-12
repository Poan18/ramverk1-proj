<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($comment->text, ["shortcode", "markdown"]);
?>
<div class="comment">
    <div class ="aUser">
        <p class="qAcro"><strong><a href="<?= url("user/profile/{$userInfo->id}"); ?>"> <?= $userInfo->acronym ?></a></strong></p>
        <img class="aUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($userInfo->email))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
        <p class="qCreated"><?= $comment->created ?></p>
    </div>
    <div class="cText"><?= $parsed->text ?></div>
</div>
