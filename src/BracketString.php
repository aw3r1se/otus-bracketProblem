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
        foreach ($striped as &$item) {
            $item = array_filter($item, static function ($value) {
                return mb_strlen($value, 'UTF-8') > 0;
            });
        }

        return count($striped[1]) === count($striped[2]);
    }
}
