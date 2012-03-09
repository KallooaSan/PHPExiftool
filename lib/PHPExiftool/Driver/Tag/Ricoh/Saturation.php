<?php

namespace PHPExiftool\Driver\Tag\Ricoh;

class Saturation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40;

    protected $Name = 'Saturation';

    protected $FullName = 'Ricoh::ImageInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Saturation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'High',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'B&W',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Toning Effect',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Vivid',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Natural',
        ),
    );

}
