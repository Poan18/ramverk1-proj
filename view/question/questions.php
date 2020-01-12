<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($question->text, ["shortcode", "markdown"]);
?>

<div class="showQuestion">
    <div class="userQuestTitle">
        <div class="userQuestTitleLink">
            <a href="<?= url("question/view/{$question->id}"); ?>"> <?= $question->title ?></a>
        </div>
        <div class="userQuestTitleUser">
            Skapad av:
            <a href="<?= url("user/profile/{$userInfo->id}"); ?>"> <?= $userInfo->acronym ?></a>
        </div>
    </div>
    <div class="userQuestText">
        <p><?= $parsed->text ?></p>
    </div>
</div>
