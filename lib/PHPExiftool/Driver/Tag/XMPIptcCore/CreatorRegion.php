<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPIptcCore;

class CreatorRegion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CreatorContactInfoCiAdrRegion';

    protected $Name = 'CreatorRegion';

    protected $FullName = 'XMP::iptcCore';

    protected $GroupName = 'XMP-iptcCore';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-iptcCore';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Creator Region';

}
