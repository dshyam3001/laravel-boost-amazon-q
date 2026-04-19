# Laravel Boost — Amazon Q Developer

[![Latest Stable Version](https://img.shields.io/packagist/v/dshyam3001/laravel-boost-amazon-q.svg)](https://packagist.org/packages/dshyam3001/laravel-boost-amazon-q)
[![License](https://img.shields.io/packagist/l/dshyam3001/laravel-boost-amazon-q.svg)](LICENSE)

A [Laravel Boost](https://github.com/laravel/boost) extension that adds [Amazon Q Developer](https://aws.amazon.com/q/developer/) as a supported agent.

## How it works

Amazon Q Developer automatically reads all `*.md` files under `.amazonq/rules/` as context in every chat and inline completion — no extra configuration needed.

This package registers Amazon Q Developer with Laravel Boost so that when you run `boost:install` or `boost:update`, your Laravel guidelines and skills are written to:

- **Guidelines** → `.amazonq/rules/guidelines.md`
- **Skills** → `.amazonq/rules/skills/`

## Installation

```bash
composer require amazon/laravel-boost-amazon-q
```

Then run Boost install and select **Amazon Q Developer**:

```bash
php artisan boost:install
```

## Updating

When Laravel Boost publishes updated guidelines, run:

```bash
composer update laravel/boost
php artisan boost:update
```

## License

MIT
