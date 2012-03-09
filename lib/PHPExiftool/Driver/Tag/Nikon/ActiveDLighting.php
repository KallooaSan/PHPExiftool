<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ActiveDLighting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'ActiveD-Lighting';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Active D-Lighting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'High',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Extra High',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'Auto',
        ),
    );

}
