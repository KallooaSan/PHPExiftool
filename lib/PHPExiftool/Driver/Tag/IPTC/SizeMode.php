<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IPTC;

class SizeMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'SizeMode';

    protected $FullName = 'IPTC::PreObjectData';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Size Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Size Not Known',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Size Known',
        ),
    );

}
