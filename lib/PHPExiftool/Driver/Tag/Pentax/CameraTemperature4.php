<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class CameraTemperature4 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 20;

    protected $Name = 'CameraTemperature4';

    protected $FullName = 'Pentax::TempInfoK5';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Camera Temperature 4';

    protected $flag_Permanent = true;

}
