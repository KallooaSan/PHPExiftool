<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

class PlayGap extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'pgap';

    protected $Name = 'PlayGap';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Play Gap';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Insert Gap',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'No Gap',
        ),
    );

}
