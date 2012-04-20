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

class ObjectCycle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 75;

    protected $Name = 'ObjectCycle';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Object Cycle';

    protected $Values = array(
        'a' => array(
            'Id' => 'a',
            'Label' => 'Morning',
        ),
        'b' => array(
            'Id' => 'b',
            'Label' => 'Both Morning and Evening',
        ),
        'p' => array(
            'Id' => 'p',
            'Label' => 'Evening',
        ),
    );

}
