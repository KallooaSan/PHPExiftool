<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class ShutterMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 27;

    protected $Name = 'ShutterMode';

    protected $FullName = 'Kodak::Main';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Shutter Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Aperture Priority',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Manual?',
        ),
    );

}
