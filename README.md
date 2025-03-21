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

- Desktop and Mobile navigation conditional on viewport width
- Scrollable and viewport constrained layouts
- Assumes PHP's default path-based routing (sensible default, not hard to change)
- internationalization is included

## Non-features

- Light/Dark modes. It is recognized that dark mode exists because light mode is
  too bright, so in order to keep complexity low we instead use neutral colors like
  they did in the 90s.
