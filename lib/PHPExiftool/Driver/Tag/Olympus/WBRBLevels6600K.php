<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

class WBRBLevels6600K extends \PHPExiftool\Driver\Tag
{

    protected $Id = 268;

    protected $Name = 'WB_RBLevels6600K';

    protected $FullName = 'Olympus::ImageProcessing';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'WB RB Levels 6600K';

    protected $flag_Permanent = true;

}
