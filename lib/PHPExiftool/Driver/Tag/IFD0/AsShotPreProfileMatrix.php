<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IFD0;

class AsShotPreProfileMatrix extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50832;

    protected $Name = 'AsShotPreProfileMatrix';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'As Shot Pre Profile Matrix';

    protected $flag_Unsafe = true;

}
