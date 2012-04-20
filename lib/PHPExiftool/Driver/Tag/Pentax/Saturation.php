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

class Saturation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'Saturation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Saturation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Low',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'High',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Med Low',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Med High',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Very Low',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Very High',
        ),
        7 => array(
            'Id' => 7,
            'Label' => '-4',
        ),
        8 => array(
            'Id' => 8,
            'Label' => '+4',
        ),
        9 => array(
            'Id' => 65535,
            'Label' => 'None',
        ),
        10 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        11 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        12 => array(
            'Id' => 2,
            'Label' => 'High',
        ),
    );

}
