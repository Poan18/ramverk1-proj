<?php

namespace Anax\View;
?>
<h1>Alla frågor</h1>
<div class="createQuestBtn">
    <a href="<?= url("question/create") ?>">Skapa fråga</a>
</div>
<?php if (!$allQuestions) : ?>
    <p>There are no questions.</p>
    <?php
    return;
endif;
?>
