<?php

declare(strict_types=1);

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Tests\Functional\Fixtures\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

abstract class AbstractEscapingViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('content', 'string', 'Content provided as argument');
    }

    public function render(): string
    {
        if (!isset($this->arguments['content'])) {
            $content = $this->renderChildren();
        } else {
            $content = $this->arguments['content'];
        }
        return $content;
    }
}
