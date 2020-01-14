# ramverk1-proj - KodHyddan
 
[![CircleCI](https://circleci.com/gh/Poan18/ramverk1-proj.svg?style=svg)](https://circleci.com/gh/Poan18/ramverk1-proj)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Poan18/ramverk1-proj/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Poan18/ramverk1-proj/?branch=master)

This is a webpage created by me, Pontus Andersson, for the course Ramverk1 at Blekinge Institute of Technology.

## Download and install

Start off by downloading the repo, you can use the following command to clone it:
```
git clone https://github.com/Poan18/ramverk1-proj

```

Proceed to update composer:
```
composer update
```

Then install the required tools:
```
make install
```

Lastly you'll need to create a SQLite database to use most of the webpage, lucky i've got a bash-script to do all of this for you. This script will both create the database and the tables required.  You just need to run it:
```
bash setup-database.bash
```