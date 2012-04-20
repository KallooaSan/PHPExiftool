<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\JVC;

class CPUVersions extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'CPUVersions';

    protected $FullName = 'JVC::Main';

    protected $GroupName = 'JVC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'JVC';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'CPU Versions';

    protected $flag_Permanent = true;

}
