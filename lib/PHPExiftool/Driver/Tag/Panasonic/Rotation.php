<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class Rotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 48;

    protected $Name = 'Rotation';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Horizontal (normal)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Rotate 180',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Rotate 90 CW',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Rotate 270 CW',
        ),
    );

}
