<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($answer->text, ["shortcode", "markdown"]);
?>

<div class="userQuestion">
    <div class="userQuestTitle">
        <a class="userQuestTitle" href="<?= url("question/view/{$question->id}"); ?>"> <?= $question->title ?></a>
    </div>
    <div class="userQuestText">
        <p><?= $parsed->text ?></p>
    </div>
</div>
