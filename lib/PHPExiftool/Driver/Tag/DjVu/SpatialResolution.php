<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DjVu;

class SpatialResolution extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'SpatialResolution';

    protected $FullName = 'DjVu::Info';

    protected $GroupName = 'DjVu';

    protected $g0 = 'DjVu';

    protected $g1 = 'DjVu';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Spatial Resolution';

}
