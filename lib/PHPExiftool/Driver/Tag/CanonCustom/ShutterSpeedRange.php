<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

class ShutterSpeedRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 268;

    protected $Name = 'ShutterSpeedRange';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Shutter Speed Range';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Enable',
        ),
    );

}
