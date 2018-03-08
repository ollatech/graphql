<?php

namespace Olla\Graphql\Bundle\Operations\Tool;

use Olla\Prisma\Annotation\Operation;

/**
 * @Operation(
 * 	   id ="graphql",
 *     path ="/graphql",
 * 	   methods = "POST"
 * )
 */
class Graphql
{
    public function __invoke() {
    	return [];
    }
}