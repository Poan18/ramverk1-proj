<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
?>
<?php foreach ($answers as $answer) :
    $parsed   = $filter->parse($answer->text, ["shortcode", "markdown"]);?>
    <div class="answer">
        <div class ="aUser">
            <p class="qAcro"><strong><?= $answer->user ?></strong></p>
            <img class="aUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($answer->email))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
            <p class="qCreated"><?= $answer->created ?></p>
        </div>
        <div class="aText"><?= $parsed->text ?></div>
        <a href="<?= url("question/comment?question={$answer->questionid}&answer={$answer->id}"); ?>">Kommentera</a>
    </div>
<?php endforeach; ?>
