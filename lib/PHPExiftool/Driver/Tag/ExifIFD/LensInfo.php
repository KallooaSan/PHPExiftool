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

class LensInfo extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42034;

    protected $Name = 'LensInfo';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'Lens Info';

    protected $local_g1 = 'ExifIFD';

}
