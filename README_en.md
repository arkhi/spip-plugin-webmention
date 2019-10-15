# Webmention plugin for Spip

**This repository now lives in https://framagit.org/arkhi/spip-plugin-webmention.**

(**English** | [français](README.md))

This project aims to implement [webmention](https://www.w3.org/TR/webmention/) in [Spip](https://spip.net/).

## Features

This plugin offers the following.

### Reposts

- sending a webmention of type `repost-of` for each published item from a syndicated site;
- a skeleton for the `repost-of` type;
- a configuration backend within Spip to:
    - filter feeds to repost;
    - define custom values within the skeleton (name, URL, avatar);
    - a debug mode to log requests and server responses.

![screenshot showing inputs explained previously](./doc/img/configuration-reposts_en.png "configuration of `repost-of` webmentions")

## Installation

### Zip file from Github

1. Download the zip file of this repository.
1. Uncompress it in the “plugins” folder at the root of the spip website.
1. Configure the plugin within the Spip backend (`?exec=configurer_webmention`).

### With git

1. Clone this repository within the « plugins » folder of the Spip website :
    ```sh
    git clone https://github.com/arkhi/spip-plugin-webmention webmention
    ```
1. Configure the plugin within the Spip backend (`?exec=configurer_webmention`).

## Future

This project depends on libraries that implement webmentions and microformats.

Anyone is welcome to contribute!

## Origin

The current working use‑case which started this project is as follow:

1. Publish interesting content through [Tiny Tiny RSS](https://tt-rss.org/).
1. Get the Tiny Tiny RSS published items feed within Spip.
1. Display published articles from within the Spip based website.

This equals to a `repost-of` webmention.

## Acknowledgments

- Logo comes from https://indieweb.org/File:webmention-logo.svg.
- Thanks to the [spipers of IRC](https://kiwiirc.com/client/irc.freenode.net/spip) for their assistance.
