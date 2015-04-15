<?php namespace Slade\Nodes;

use Slade\Parser;
use Slade\Scope;

/**
 * @node /^!/
 */
class UnlessNode extends Node {

    public static function parse($node, $inner, Scope &$scope, Scope &$sections) {
        $var = static::stripOperator($node);

        if (!$scope->get($var))
            return Parser::parse($inner, $scope);
    }

}