<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

class FlashGroupACompensation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashGroupACompensation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'Flash Group A Compensation';

    protected $flag_Permanent = true;

    protected $Index = 1;

}
