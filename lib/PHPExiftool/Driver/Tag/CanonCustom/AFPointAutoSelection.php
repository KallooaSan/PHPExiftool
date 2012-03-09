<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFPointAutoSelection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1291;

    protected $Name = 'AFPointAutoSelection';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF Point Auto Selection';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Control-direct:disable/Main:enable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Control-direct:disable/Main:disable',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Control-direct:enable/Main:enable',
        ),
    );

}
