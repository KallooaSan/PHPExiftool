<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

class OptoElectricConvFactor extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34856;

    protected $Name = 'Opto-ElectricConvFactor';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Opto-Electric Conv Factor';

    protected $local_g1 = 'ExifIFD';

    protected $flag_Binary = true;

}
