<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Microsoft\PhpParser\Node\Statement;

use Microsoft\PhpParser\Node\Expression;
use Microsoft\PhpParser\Node\QualifiedName;
use Microsoft\PhpParser\Node\StatementNode;
use Microsoft\PhpParser\Token;

class NamespaceDefinition extends StatementNode {
    /** @var Token */
    public $namespaceKeyword;
    /** @var QualifiedName | null */
    public $name;
    /** @var Expression | Token */
    public $compoundStatementOrSemicolon;
}
