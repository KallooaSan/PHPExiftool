<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MeteringMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Multi-segment',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center-weighted average',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
    );

}
