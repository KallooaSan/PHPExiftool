<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KDCIFD;

class WBRGBLevelsShade extends \PHPExiftool\Driver\Tag
{

    protected $Id = 64042;

    protected $Name = 'WB_RGBLevelsShade';

    protected $FullName = 'Kodak::KDC_IFD';

    protected $GroupName = 'KDC_IFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KDC_IFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WB RGB Levels Shade';

    protected $flag_Permanent = true;

}
