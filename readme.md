# Barebones Base Theme

## Description

Barebones Base Theme is a nearly blank WordPress theme meant to be used as a starting point for custom WordPress sites. The theme comes with almost nothing except a rudimentary HTML skeleton and Bootstrap 4 pre-installed. It uses [Laravel Mix](https://github.com/JeffreyWay/laravel-mix), a wrapper around Webpack, to handle JavaScript and SASS compilation.

I created this base theme because I wanted to be able to start writing a custom theme extremely quickly, without having to rip out all of the parts I don't need. I started this theme with [Underscores](https://github.com/Automattic/_s) and tore out most of it.

## Getting started

Clone this theme, and then run this in the terminal in your theme's directory:

    npm install

You're ready to go! You can use any of these commands to start working with JavaScript and CSS compilation.

    // Build your assets for development
    npm run dev

    // Start browsersync to watch for file changes and refresh the page
    // This will open your site in a new window at `localhost:3000`
    npm run watch

    // Start webpack dev server with hot reloading (use for advanced JS development)
    // Won't work for compiling SASS from your `sass` directory
    npm run hot

    // Build your assets for production
    npm run production

## Contributing

I would love for you to contribute to the base theme! My goal is to keep this theme as simple as possible. However, there may be additional features that are common enough to find a place in this theme.

## Changelog

= 1.0 - September 1 2017 =
* Initial release