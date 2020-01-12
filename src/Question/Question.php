<?php

namespace Pon\Question;

use Pon\Barm\BonusActiveRecordModel;

/**
 * A database driven model.
 */
class Question extends BonusActiveRecordModel
{
    /**
     * @var string $tableName name of the database table.
     */
    protected $tableName = "Question";

    /**
     * Columns in the table.
     *
     * @var integer $id primary key auto incremented.
     */
    public $id;
    public $userId;
    public $title;
    public $text;
    public $created;
    public $updated;
    public $deleted;
}
