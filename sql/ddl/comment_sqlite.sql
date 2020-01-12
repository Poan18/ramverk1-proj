--
-- Table Comment
--
DROP TABLE IF EXISTS Comment;
CREATE TABLE Comment (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "userId" INTEGER NOT NULL,
    "text" TEXT,
    "questionid" INTEGER,
    "answerid" INTEGER,
    "created" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME
);
