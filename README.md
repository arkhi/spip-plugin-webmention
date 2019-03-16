This project aims to implement webmentions in [Spip](https://spip.net/).

The current working use‑case which started this project is as follow:

1. Publish interesting content through [Tiny Tiny RSS](https://tt-rss.org/).
1. Get the Tiny Tiny RSS published items feed within Spip.
1. Display published articles from within the Spip based website.

This equals to a “repost-of” webmention.

This project depends on libraries that implement webmentions and microformats. More should follow. Anyone is welcome to contribute.

## Todo

- Implement receiving and sending other types of webmentions.
    - Send in-reply-to when mentioning a link in a post.
- Use [Job queue API](https://www.spip.net/fr_article5527.html "article in French: “API de gestion de la file des travaux”")