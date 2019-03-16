<?php

include_spip('inc/config');
include_spip('lib/MentionClientPhp/src/IndieWeb/MentionClient');
include_spip('lib/Mf2/Mf2/Parser');

if (lire_config('webmention/debug') === 'on') {
    define('_NO_CACHE', -1);
}

?>
