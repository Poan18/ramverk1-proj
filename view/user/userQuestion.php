<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($question->text, ["shortcode", "markdown"]);
?>

<div class="userQuestion">
    <div class="userQuestTitle">
        <a href="<?= url("question/view/{$question->id}"); ?>"> <?= $question->title ?></a>
    </div>
    <div class="userQuestText">
        <p><?= $parsed->text ?></p>
    </div>
</div>
