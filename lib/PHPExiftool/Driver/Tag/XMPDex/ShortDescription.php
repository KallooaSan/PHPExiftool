<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDex;

class ShortDescription extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'shortdescription';

    protected $Name = 'ShortDescription';

    protected $FullName = 'XMP::dex';

    protected $GroupName = 'XMP-dex';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-dex';

    protected $g2 = 'Image';

    protected $Type = 'lang-alt';

    protected $Writable = true;

    protected $Description = 'Short Description';

}
