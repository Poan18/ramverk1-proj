<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($answer->text, ["shortcode", "markdown"]);
?>

<div class="answer">
    <div class ="aUser">
        <p class="qAcro"><strong><a href="<?= url("user/profile/{$userInfo->id}"); ?>"> <?= $userInfo->acronym ?></a></strong></p>
        <img class="aUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($userInfo->email))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
        <p class="qCreated"><?= $answer->created ?></p>
    </div>
    <div class="aText"><?= $parsed->text ?></div>
    <a class="commentBtn" href="<?= url("question/comment?question={$answer->questionid}&answer={$answer->id}"); ?>">Kommentera</a>
</div>
