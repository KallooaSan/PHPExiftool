<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ChromaticAberrationCorrection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'ChromaticAberrationCorrection';

    protected $FullName = 'Pentax::LensCorr';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Chromatic Aberration Correction';

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
