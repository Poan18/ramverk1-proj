--
-- Table TagQuestion
--
DROP TABLE IF EXISTS TagQuestion;
CREATE TABLE TagQuestion (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "text" TEXT,
    "questionid" INTEGER
);
