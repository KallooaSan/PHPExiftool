<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPrism;

class ByteCount extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'byteCount';

    protected $Name = 'ByteCount';

    protected $FullName = 'XMP::prism';

    protected $GroupName = 'XMP-prism';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prism';

    protected $g2 = 'Document';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Byte Count';

    protected $flag_Avoid = true;

}
