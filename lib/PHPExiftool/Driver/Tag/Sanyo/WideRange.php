<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class WideRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 527;

    protected $Name = 'WideRange';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Wide Range';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
