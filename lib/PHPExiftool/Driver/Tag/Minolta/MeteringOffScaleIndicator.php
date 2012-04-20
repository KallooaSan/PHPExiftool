<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

class MeteringOffScaleIndicator extends \PHPExiftool\Driver\Tag
{

    protected $Id = 83;

    protected $Name = 'MeteringOffScaleIndicator';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Metering Off Scale Indicator';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Within Range',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Under/Over Range',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Out of Range',
        ),
    );

}
