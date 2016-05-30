<?php

/**
 * Return the titlebar for a page
 * @param Page $page The calling Kirby Page instance
 * @return String
 */
page::$methods['titlebar'] = function($page, $separator = ' – ') {
    $titlebar = site()->title()->html();

    if ( ! $page->isHomepage()) {
        $titlebar = $page->title()->html() . $separator . $titlebar;
    }

    return $titlebar;
};
