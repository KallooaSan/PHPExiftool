<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

class JPEGQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12340;

    protected $Name = 'JPEGQuality';

    protected $FullName = 'Panasonic::Subdir';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'JPEG Quality';

    protected $flag_Permanent = true;

    protected $Values = array(
        94 => array(
            'Id' => 94,
            'Label' => 'Basic',
        ),
        97 => array(
            'Id' => 97,
            'Label' => 'Fine',
        ),
    );

}
