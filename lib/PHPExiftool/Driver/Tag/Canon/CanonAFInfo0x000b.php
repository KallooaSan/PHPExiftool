<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

class CanonAFInfo0x000b extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'Canon_AFInfo_0x000b';

    protected $FullName = 'Canon::AFInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Canon AF Info 0x000b';

    protected $flag_Permanent = true;

    protected $Index = 1;

}
