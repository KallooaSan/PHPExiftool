<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FotoStation;

class Rotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'Rotation';

    protected $FullName = 'FotoStation::SoftEdit';

    protected $GroupName = 'FotoStation';

    protected $g0 = 'FotoStation';

    protected $g1 = 'FotoStation';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Rotation';

}
