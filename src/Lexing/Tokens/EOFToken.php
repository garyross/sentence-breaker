<?php

/**
 * This file is part of sentence-breaker.
 *
 * (c) Philippe Gerber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Bigwhoop\SentenceBreaker\Lexing\Tokens;

class EOFToken implements Token
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'T_EOF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPrintableValue()
    {
        return '';
    }
}
