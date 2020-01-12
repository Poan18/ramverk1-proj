--
-- Creating a User table.
--



--
-- Table User
--
DROP TABLE IF EXISTS User;
CREATE TABLE User (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "acronym" TEXT UNIQUE NOT NULL,
    "password" TEXT,
    "created" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME,
    "active" DATETIME,
    "email" VARCHAR(100)
);

--
-- Table Question
--
DROP TABLE IF EXISTS Question;
CREATE TABLE Question (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "user" TEXT NOT NULL,
    "title" TEXT,
    "text" TEXT,
    "created" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME
);

--
-- Table Answer
--
DROP TABLE IF EXISTS Answer;
CREATE TABLE Answer (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "user" TEXT NOT NULL,
    "text" TEXT,
    "questionid" INTEGER,
    "created" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME
);

--
-- Table Comment
--
DROP TABLE IF EXISTS Comment;
CREATE TABLE Comment (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "user" TEXT NOT NULL,
    "text" TEXT,
    "questionid" INTEGER,
    "answerid" INTEGER,
    "created" TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME
);

--
-- Table TagQuestion
--
DROP TABLE IF EXISTS TagQuestion;
CREATE TABLE TagQuestion (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "text" TEXT,
    "questionid" INTEGER
);

--
-- Table TagQuestion
--
DROP TABLE IF EXISTS Tag;
CREATE TABLE Tag (
    "id" INTEGER PRIMARY KEY NOT NULL,
    "text" TEXT
);
