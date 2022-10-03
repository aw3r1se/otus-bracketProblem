<?php

namespace BracketProblem;

/**
 * Class BracketString
 * @package aw3r1se\BracketProblem
 */
class BracketString
{
    private string $parseable;

    public function __construct(string $parseable)
    {
        $this->parseable = $parseable;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        preg_match_all('#(\()|(\))#ui', $this->parseable, $striped);

        var_dump($striped);

        return $striped[1] === $striped[2];
    }
}
