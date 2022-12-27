<?php

namespace Gregwar\Captcha;

/**
 * Interface for the PhraseBuilder
 *
 */
interface PhraseBuilderInterface
{
    /**
     * Generates  random phrase of given length with given charset
     */
    public function build($length, $charset);

    /**
     * "Niceize" a code
     */
    public function niceize($str);
}
