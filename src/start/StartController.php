<?php

namespace Pon\Start;

use Anax\Commons\ContainerInjectableInterface;
use Anax\Commons\ContainerInjectableTrait;
use Pon\Tag\Tag;
use Pon\Question\Question;
use Pon\Pon\ActiveRecordModelExtra;
use Pon\Tags\TagQuestion;
use Pon\User\User;

// use Anax\Route\Exception\ForbiddenException;
// use Anax\Route\Exception\NotFoundException;
// use Anax\Route\Exception\InternalErrorException;

/**
 * A sample controller to show how a controller class can be implemented.
 */
class StartController implements ContainerInjectableInterface
{
    use ContainerInjectableTrait;



    /**
     * @var $data description
     */
    //private $data;



    // /**
    //  * The initialize method is optional and will always be called before the
    //  * target method/action. This is a convienient method where you could
    //  * setup internal properties that are commonly used by several methods.
    //  *
    //  * @return void
    //  */
    // public function initialize() : void
    // {
    //     ;
    // }



    /**
     * Description.
     *
     * @param datatype $variable Description
     *
     * @throws Exception
     *
     * @return object as a response object
     */
    public function indexActionGet() : object
    {

        $page = $this->di->get("page");

        $question = new Question();
        $question->setDb($this->di->get("dbqb"));
        $allQuestions = $question->findAllOrderBy("created", 3);

        foreach($allQuestions as $question) {
            $user = new User();
            $user->setDb($this->di->get("dbqb"));
            $userInfo = $user->find('id', $question->userId);
            $page->add("question/questions", [
                "question" => $question,
                "userInfo" => $userInfo,
            ]);
        }

        $TagQuestion = new TagQuestion();
        $TagQuestion->setDb($this->di->get("dbqb"));
        $top3Tags = $TagQuestion->findAllOrderByGroupBy("count DESC", "text", 3, "text, count(text) as count, id");

        $page->add("start/topTags", [
            "allTags" => $top3Tags,
        ]);

        return $page->render([
            "title" => "A index page",
        ]);
    }
}
