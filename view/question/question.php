<?php

namespace Anax\View;
$filter   = new \Anax\TextFilter\TextFilter();
$parsed   = $filter->parse($question->text, ["shortcode", "markdown"]);
?>

<?php if (!$question) : ?>
    S<p>There is no question with this ID.</p>
<?php
return;
endif;
?>
<div class="question">
    <h1 class="qTitle"><?= $question->title ?></h1>
    <div class ="qUser">
        <p class="qAcro"><a href="<?= url("user/profile/{$userInfo->id}"); ?>"> <?= $userInfo->acronym ?></a></p>
        <img class="qUserImg" src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($userInfo->email))) . "?d=" . urlencode("https://www.gravatar.com/avatar") . "&s=" . 150; ?>" alt="" />
        <p class="qCreated"><?= $question->created ?></p>
    </div>
    <div class="qText"><?= $parsed->text ?></div>
    <div class="qTags">
        <ul>
    <?php foreach ($tags as $tag) : ?>
            <li class="qTag"><a href="<?= url("tags/view/{$tag->text}"); ?>"><?= $tag->text ?></a></li>
    <?php endforeach; ?>
        </ul>
    </div>

    <a class="commentBtn" href="<?= url("question/comment?question={$question->id}"); ?>">Kommentera</a>
</div>
