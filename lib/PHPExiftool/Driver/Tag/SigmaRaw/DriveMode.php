<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class DriveMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'DRIVE';

    protected $Name = 'DriveMode';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Drive Mode';

    protected $Values = array(
        '10S' => array(
            'Id' => '10S',
            'Label' => '10 s Timer',
        ),
        '2S' => array(
            'Id' => '2S',
            'Label' => '2 s Timer',
        ),
        'AB' => array(
            'Id' => 'AB',
            'Label' => 'Auto Bracket',
        ),
        'MULTI' => array(
            'Id' => 'MULTI',
            'Label' => 'Multi Shot',
        ),
        'OFF' => array(
            'Id' => 'OFF',
            'Label' => 'Off',
        ),
        'SINGLE' => array(
            'Id' => 'SINGLE',
            'Label' => 'Single Shot',
        ),
        'UP' => array(
            'Id' => 'UP',
            'Label' => 'Mirror Up',
        ),
    );

}
