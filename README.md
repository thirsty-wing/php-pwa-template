# PHP PWA Template

This is a template for php progressive web app (PWA).

## Why does this exist?

Making software simple is about understanding the use cases and leaning into what
makes sense. Software doesn't need to have all capabilities in order to be successful.
The capabilities just need to match the use cases. There are a slew of apps out there
whose offline capabilities have little to no use case. In other words, they are very
much online apps. By recognizing this, we can lean into hypermedia technology which
allows us to ship close to no application logic and just rely on a hypermedia API.
PHP is very good at creating hypermedia APIs.

## Features

- [HTML Templating](docs/HTML_TEMPLATING.md)
- [CSS Strategy](docs/CSS_STRATEGY.md)
- [DB CRUD](docs/DB_CRUD.md)
- Path based [Routing](docs/ROUTING.md)
- [Localization](docs/LOCALIZATION.md)
- [Authentication](docs/AUTHENTICATION.md)
- Role Based [Authorization](docs/AUTHORIZATION.md)
- [Migrations](docs/MIGRATIONS.md)
- [Logging](docs/LOGGING.md)
- [Queues](docs/QUEUES.md)

## Non-features

- Light/Dark modes. It is recognized that dark mode exists because light mode is
  too bright, so in order to keep complexity low we instead use neutral colors like
  they did in the 90s.

## internationalization

Generate .po files `xgettext *.php`
Generate .mo file with `msgfmt messages.po -o messages.mo`
