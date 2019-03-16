<?php

use IndieWeb\MentionClient;
use Mf2\Mf2;

include_spip('inc/config');

function webmention_post_insertion($flux) {
    $feedIds = lire_config('webmention/id_syndic');

    // Stop execution if no feed is selected.
    if (!isset($feedIds)) {
        return $flux;
    }

    // Stop execution if the article does not belong to one of the selected feeds.
    if (!in_array(
        $flux['data']['id_syndic'],
        explode(',', $feedIds)
    )) {
        return $flux;
    }

    $sourceURL = generer_url_public(
        'repost',
        [
            'id' => $flux['args']['id_objet'],
        ],
        true,
        false
    );
    $targetURL = $flux['data']['url'];

    $client    = new MentionClient();
    $response  = $client->sendWebmention($sourceURL, $targetURL);

    spip_log(
        [
            'sourceURL'          => $sourceURL,
            'targetURL'          => $targetURL,
            '$flux'              => $flux,
            'rels'               => $client->c('rels', $targetURL),
            'supportsPingback'   => $client->c('supportsPingback', $targetURL),
            'supportsWebmention' => $client->c('supportsWebmention', $targetURL),
            'webmentionServer'   => $client->c('webmentionServer', $targetURL),
            'supportsWebmention' => $client->c('supportsWebmention', $targetURL),
            'supportsWebmention' => $client->c('supportsWebmention', $targetURL),
            'response'           => $response,
        ],
        'plugin_webmention.' . _LOG_INFO_IMPORTANTE
    );

    return $flux;
}

?>