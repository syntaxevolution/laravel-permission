# Associate users with permissions and roles


[![Latest Version on Packagist](https://img.shields.io/packagist/v/syntaxevolution/laravel-permission.svg?style=flat-square)](https://packagist.org/packages/syntaxevolution/laravel-permission)
![](https://github.com/syntaxevolution/laravel-permission/workflows/Run%20Tests/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/syntaxevolution/laravel-permission.svg?style=flat-square)](https://packagist.org/packages/syntaxevolution/laravel-permission)

This package allows you to manage user permissions and roles in a database.

Once installed you can do stuff like this:

```php
// Adding permissions to a user
$user->givePermissionTo('edit articles');

// Adding permissions via a role
$user->assignRole('writer');

$role->givePermissionTo('edit articles');
```

Because all permissions will be registered on [Laravel's gate](https://laravel.com/docs/authorization), you can check if a user has a permission with Laravel's default `can` function:

```php
$user->can('edit articles');
```

## Documentation, Installation, and Usage Instructions

See the [DOCUMENTATION](https://docs.spatie.be/laravel-permission/v3/introduction/) for detailed installation and usage instructions.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email me instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

This package is heavily based on [Jeffrey Way](https://twitter.com/jeffrey_way)'s awesome [Laracasts](https://laracasts.com) lessons
on [permissions and roles](https://laracasts.com/series/whats-new-in-laravel-5-1/episodes/16). His original code
can be found [in this repo on GitHub](https://github.com/laracasts/laravel-5-roles-and-permissions-demo).

Special thanks to [Alex Vanderbist](https://github.com/AlexVanderbist) who greatly helped with `v2`, and to [Chris Brown](https://github.com/drbyte) for his longtime support  helping us maintain the package.

## Alternatives

- [Povilas Korop](https://twitter.com/@povilaskorop) did an excellent job listing the alternatives [in an article on Laravel News](https://laravel-news.com/two-best-roles-permissions-packages). In that same article, he compares laravel-permission to [Joseph Silber](https://github.com/JosephSilber)'s [Bouncer]((https://github.com/JosephSilber/bouncer)), which in our book is also an excellent package.
- [ultraware/roles](https://github.com/ultraware/roles) takes a slightly different approach to its features.
- [santigarcor/laratrust](https://github.com/santigarcor/laratrust) implements team support
- [zizaco/entrust](https://github.com/zizaco/entrust) offers some wildcard pattern matching

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
