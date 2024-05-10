<?php
/** @var \MODX\Revolution\modX $modx */

if ($modx->services->has('mmxDating')) {
    /** @var array $scriptProperties */
    return $modx->services->get('mmxDating')->handleSnippet($scriptProperties);
}