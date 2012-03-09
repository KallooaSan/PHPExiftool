<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class ProgramISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 60;

    protected $Name = 'ProgramISO';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Program ISO';

    protected $flag_Permanent = true;

    protected $Values = array(
        65534 => array(
            'Id' => 65534,
            'Label' => 'Intelligent ISO',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
