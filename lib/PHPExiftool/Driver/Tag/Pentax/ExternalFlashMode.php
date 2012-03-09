<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ExternalFlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ExternalFlashMode';

    protected $FullName = 'Pentax::FlashInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'External Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a - Off-Auto-Aperture',
        ),
        63 => array(
            'Id' => 63,
            'Label' => 'Off',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'On, Auto',
        ),
        191 => array(
            'Id' => 191,
            'Label' => 'On, Flash Problem',
        ),
        192 => array(
            'Id' => 192,
            'Label' => 'On, Manual',
        ),
        196 => array(
            'Id' => 196,
            'Label' => 'On, P-TTL Auto',
        ),
        197 => array(
            'Id' => 197,
            'Label' => 'On, Contrast-control Sync',
        ),
        198 => array(
            'Id' => 198,
            'Label' => 'On, High-speed Sync',
        ),
        204 => array(
            'Id' => 204,
            'Label' => 'On, Wireless',
        ),
        205 => array(
            'Id' => 205,
            'Label' => 'On, Wireless, High-speed Sync',
        ),
        240 => array(
            'Id' => 240,
            'Label' => 'Not Connected',
        ),
    );

}
