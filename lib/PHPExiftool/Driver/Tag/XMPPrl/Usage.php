<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPrl;

class Usage extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'usage';

    protected $Name = 'Usage';

    protected $FullName = 'XMP::prl';

    protected $GroupName = 'XMP-prl';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prl';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Usage';

    protected $flag_Avoid = true;

    protected $flag_List = true;

    protected $flag_Bag = true;

}
