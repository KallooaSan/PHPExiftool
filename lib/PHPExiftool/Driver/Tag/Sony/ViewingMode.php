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

class ViewingMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 47;

    protected $Name = 'ViewingMode';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Viewing Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'ViewFinder',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Focus Check Live View',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Quick AF Live View',
        ),
    );

}
