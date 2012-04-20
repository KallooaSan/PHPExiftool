<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpNote;

class HasExtendedXMP extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'HasExtendedXMP';

    protected $Name = 'HasExtendedXMP';

    protected $FullName = 'XMP::xmpNote';

    protected $GroupName = 'XMP-xmpNote';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpNote';

    protected $g2 = 'Other';

    protected $Type = 'boolean';

    protected $Writable = true;

    protected $Description = 'Has Extended XMP';

    protected $flag_Protected = true;

}
