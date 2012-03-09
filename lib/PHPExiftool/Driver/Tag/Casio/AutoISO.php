<?php

namespace PHPExiftool\Driver\Tag\Casio;

class AutoISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12296;

    protected $Name = 'AutoISO';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Auto ISO';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Off',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'On (high sensitivity)',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'On (anti-shake)',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'High Speed',
        ),
    );

}
