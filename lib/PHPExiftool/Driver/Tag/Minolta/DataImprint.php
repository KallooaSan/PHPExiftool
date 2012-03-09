<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class DataImprint extends \PHPExiftool\Driver\Tag
{

    protected $Id = 52;

    protected $Name = 'DataImprint';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Data Imprint';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'YYYY/MM/DD',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'MM/DD/HH:MM',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Text',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Text + ID#',
        ),
    );

}
