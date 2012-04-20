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

class FocusProcess extends \PHPExiftool\Driver\Tag
{

    protected $Id = 770;

    protected $Name = 'FocusProcess';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Process';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF Not Used',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF Used',
        ),
    );

}
