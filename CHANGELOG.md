# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1] - 2018-05-04

### Added

* Create collection `Handling, Search` and `Transformation`
* Add method `all, count, isEmpty`  to `HandlingCollection`
* Add method `first, last, each`  to `SearchCollection`
* Add methods `keys, filter, merge, map, toJson`  to `TransformingCollection`

### Fixed
* Fixed bug `count` PHP function, return `bool`.
    - Before `count($mycollection)` return `true` or `1`
    - After `count($mycollection)` return collection content number
    
* Fixed bug `merge` error return if merge the same collection
