<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class ExposureWarning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4866;

    protected $Name = 'ExposureWarning';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Warning';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Good',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Bad exposure',
        ),
    );

}
