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

class ManufactureDate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'ManufactureDate';

    protected $FullName = 'Pentax::CameraInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Manufacture Date';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

}
