<?php

/*
 * This file is part of the 'octris/sqlbuilder' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris;

/**
 * SQL builder for Wordpress plugins.
 *
 * @copyright   copyright (c) 2017 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class WPSqlbuilder extends Sqlbuilder
{
    /**
     * Resolve query parameter.
     *
     * @param   int                                 $idx        Position of the parameter in the query.
     * @param   string                              $type       Type of the parameter.
     * @param   string                              $name       Name of the parameter.
     */
    public function resolveParameter($idx, $type, $name)
    {
        return '%' . $type;
    }
}
