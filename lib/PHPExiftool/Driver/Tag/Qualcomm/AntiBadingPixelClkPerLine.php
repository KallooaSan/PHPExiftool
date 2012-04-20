<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Qualcomm;

class AntiBadingPixelClkPerLine extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'anti_bading_pixel_clk_per_line';

    protected $Name = 'AntiBadingPixelClkPerLine';

    protected $FullName = 'Qualcomm::Main';

    protected $GroupName = 'Qualcomm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Qualcomm';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Anti Bading Pixel Clk Per Line';

    protected $flag_Permanent = true;

}
