# Contributing rules for the repository

To contribute into the current repository <https://github.com/J9rem/LehyenSkangApp>, you should follow these rules.

## Languages

 1. the language used for comments and code is English.
 2. the prefered language for issues and pull-request is English but French is accepted.

## Structure of the code

This repository is the main application of the project BUT the head of the projet is <https://github.com/J9rem/LehyenSkang>.  
It is a way to allow upgrade automatically done via composer.

```
/docs/                     // documentation
/src/                      // sources
/src/css/                  // style files
/src/css/vendor/           // style files from dependencies
/src/js/                   // javascripts files
/src/js/vendor/            // javascripts files from dependencies
/src/php/                  // php files
/vendor/                   // composer dependencies
```

## Maintainers

Current maintainers of this repository are :
 - Jérémy Dufraisse - J9rem <https://github.com/J9rem>, since 2023

## Commits

 - commits should be name as in https://www.conventionalcommits.org/en/v1.0.0/ revisions v1.0.0 or after if stable
 - commit should represent a small change
 - feature or big changes should be done via multiple commits
 - the branch should be rebase on top before merge with a commit merge (no fast fordwarding)

## Branch names

 - for a new feature, `feat/my-feature`
 - for a fix, or an improvement of a feature, `fix/my-feature-name`
 - for a bugfix, `bugfix/bug-name`
 - banches are referenced to a version named branch as `v1.x.x`
