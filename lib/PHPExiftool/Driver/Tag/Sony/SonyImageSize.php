<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

class SonyImageSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'SonyImageSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Sony Image Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 1,
            'Label' => 'Large',
        ),
        1 => array(
            'Id' => 2,
            'Label' => 'Medium',
        ),
        2 => array(
            'Id' => 3,
            'Label' => 'Small',
        ),
        3 => array(
            'Id' => 21,
            'Label' => 'Large (3:2)',
        ),
        4 => array(
            'Id' => 22,
            'Label' => 'Medium (3:2)',
        ),
        5 => array(
            'Id' => 23,
            'Label' => 'Small (3:2)',
        ),
        6 => array(
            'Id' => 25,
            'Label' => 'Large (16:9)',
        ),
        7 => array(
            'Id' => 26,
            'Label' => 'Medium (16:9)',
        ),
        8 => array(
            'Id' => 27,
            'Label' => 'Small (16:9)',
        ),
    );

}
