<?php
if (!class_exists('Intl_fr_FR')) {
    class Intl_fr_FR {
        public static function init(&$messages) {
            $messages['fr_FR'] = unserialize(gzinflate(base64_decode("
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")));
        }
    }
    Intl::addLang('fr_FR', 'Français (France)', 'flag-fr');
}
