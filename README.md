# PHP 8.1

- [PHP Дайджест](https://t.me/s/phpdigest)
- [PHP.Watch](https://php.watch/versions/8.1)
- [stitcher.io](https://stitcher.io/blog/new-in-php-81)

## New Features
- Intersection Types
- Enums
- `never` return type
- Fibers
- Readonly Properties
- New in initializers
- `final` class constants
- New `fsync` and `fdatasync` functions
- New `array_is_list` function
- New Sodium `XChaCha20` functions
- GD: AVIF image support
- Intl: New `IntlDatePatternGenerator` class
- Phar: Added OpenSSL-256 and OpenSSL-512 signature algorithms
- GD: Lossless WebP encoding support
- New `#[ReturnTypeWillChange]` attribute
- First-class Callable Syntax
- `$_FILES`: New `full_path` value for directory-uploads
- Array unpacking support for string-keyed arrays
- Explicit Octal numeral notation
- Hash functions accept algorithm-specific `$options`
- MurmurHash3 hash algorithm support
- xxHash hash algorithms support
- FPM: Configurable child-process spawn rate
- Curl: DNS-over-HTTPS support
- Curl: File uploads from strings with `CURLStringFile`
- MySQLi: New `MYSQLI_REFRESH_REPLICA` constant

## Syntax/Functionality Changes
- HTML entity en/decode functions process single quotes and substitute by default
- `$GLOBALS` variable restrictions
- Phar: Default signature algorithm changed from SHA1 to SHA256
- `SplFixedArray` implements `JsonSerializable`, and json-encodes as an array
- CLI: Interactive shell (`php -a`) requires `readline` extension
- MySQLi: Default error mode set to exceptions
- Configurable line endings for `fputcsv` and `SplFileObject::fputcsv`
- `version_compare` operator restrictions
- Warning on `compact` function calls with non-string and non-array string parameters
- finfo Extension: `file_info` resource are migrated to existing `finfo` objects
- IMAP: `imap` resources are `IMAP\Connection` class objects
- FTP Extension: Connection resources are `FTP\Connection` class objects
- GD Extension: Font identifiers are `GdFont` class objects
- LDAP: resources migrated to `LDAP\Connection`, `LDAP\Result`, and `LDAP\ResultEntry` objects
- PostgreSQL: `resource`s migrated to `PgSql\Connection`, `PgSql\Result`, and `PgSql\Lob` objects
- Pspell: `pspell`, `pspell config` resources are `PSpell\Dictionary`, `PSpell\Config` class objects

## Deprecations
- Passing `null` to non-nullable internal function parameters is deprecated
- Return types in PHP built-in class methods and deprecation notices
- `Serializable` interface deprecated
- Implicit incompatible float to int conversion is deprecated
- `mysqli::get_client_info` method and `mysqli_get_client_info`($param) is deprecated
- `date_sunrise`, `date_sunset` functions and related INI settings are deprecated
- `strptime` function is deprecated
- `mhash*()` functions (hash extension) are deprecated
- `filter.default` and `filter.default_options` INI settings are deprecated
- `PDO::FETCH_SERIALIZE` is deprecated
- `auto_detect_line_endings` INI directive is deprecated
- `strftime` and `gmstrftime` functions are deprecated
- MySQLi: `mysqli_driver->driver_version` property is deprecated

## Useful commands and tools

- [Psalm](https://psalm.dev/)
- [PHPStan](https://phpstan.org/)
- [PHPCompatibility](https://github.com/PHPCompatibility/PHPCompatibility)
- `composer why-not php ^8.1`
- `composer require symfony/polyfill-php81`

## Fibers

- https://clue.engineering/2021/fibers-in-php
