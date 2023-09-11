![Grafite Auth](GrafiteAuth-banner.png)

**Auth** - A handy set of Auth tools for Laravel.

[![Build Status](https://github.com/GrafiteInc/Auth/workflows/PHP%20Package%20Tests/badge.svg?branch=main)](https://github.com/GrafiteInc/Auth/actions?query=workflow%3A%22PHP+Package+Tests%22)
[![Maintainability](https://api.codeclimate.com/v1/badges/70e073844adaa608af33/maintainability)](https://codeclimate.com/github/GrafiteInc/Auth/maintainability)
[![Packagist](https://img.shields.io/packagist/dt/grafite/Auth.svg)](https://packagist.org/packages/grafite/Auth)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/grafite/Auth)

The Auth package lets you generate forms as well as fields with standard make commands. Inside your forms for models you can specify the fields that need to be generated and then simply pass the form to the view. No more writing Auth forms, error handling etc. It can handle Eloquent relationships and easily work with ajax requests for more dynamic form submissions.

##### Author(s):
* [Matt Lantz](https://github.com/mlantz) ([@mattylantz](http://twitter.com/mattylantz), mattlantz at gmail dot com)

## Requirements

1. PHP 7.3+|8.1+
2. OpenSSL

## Compatibility and Support

| Laravel Version | Package Tag | Supported |
|-----------------|-------------|-----------|
| ^7.x - ^10.x | 1.x | yes |

### Installation

Start a new Laravel project:
```php
composer create-project laravel/laravel your-project-name
```

Then run the following to add Forms
```php
composer require "grafite/auth"
```

Time to publish those assets!
```php
php artisan vendor:publish --provider="Grafite\Auth\AuthProvider"
```

## Documentation

[https://docs.grafite.ca/utilities/auth](https://docs.grafite.ca/utilities/auth)

## License
Auth is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests
Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
