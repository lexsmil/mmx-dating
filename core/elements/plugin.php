<?php
/** @var \MODX\Revolution\modX $modx */

if ($modx->services->has('mmxDating')) {
    $modx->services->get('mmxDating')->handleEvent($modx->event);
}