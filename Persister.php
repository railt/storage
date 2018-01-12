<?php
/**
 * This file is part of Railt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Railt\Storage;

use Railt\Io\Readable;

/**
 * Interface Persister
 */
interface Persister
{
    /**
     * @param Readable $readable
     * @param \Closure $then
     * @return object|\Railt\Reflection\Contracts\Document
     */
    public function remember(Readable $readable, \Closure $then);
}
