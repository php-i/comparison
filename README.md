# PHP I: Comparison

## Introduction

The `Comparable` interface defines the `getComparisonTo` method,
which determines the sort order of instances of the implementing type.

The `Equalable` interface defines the `isEqualTo` & `isNotEqualTo` methods,
which determines the equality of instances of the implementing type.

## Motivation

PHP doesn't have built-in interfaces for object comparison. Inspired by:

- [Java Comparable interface](https://docs.oracle.com/javase/8/docs/api/java/lang/Comparable.html)
- [.NET IComparable interface](https://docs.microsoft.com/en-us/dotnet/api/system.icomparable)
- [.NET IEquatable interface](https://docs.microsoft.com/en-us/dotnet/api/system.iequatable-1)
- [Ruby Comparable module](https://ruby-doc.org/core-2.4.0/Comparable.html)

## Security

If you discover any security related issues, please email open@cybercog.su instead of using the issue tracker.

## Contributors

| <a href="https://github.com/antonkomarev">![@antonkomarev](https://avatars.githubusercontent.com/u/1849174?s=110)<br />Anton Komarev</a> |
| :---: |

[PHP I: Comparison contributors list](../../contributors)

## License

- `PHP I: Comparison` package is open-sourced software licensed under the [MIT license](LICENSE) by [Anton Komarev].

[Anton Komarev]: https://komarev.com
