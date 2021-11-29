<?php

namespace Worksome\CodingStyle\Tests\PHPStan;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

class BaseRuleTestCase extends RuleTestCase
{
    public Rule $rule;

    protected function getRule(): Rule
    {
        return $this->rule;
    }
}