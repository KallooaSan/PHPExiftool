<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MetaIFD;

class NativeResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50042;

    protected $Name = 'NativeResolutionUnit';

    protected $FullName = 'Kodak::Meta';

    protected $GroupName = 'MetaIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'MetaIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Native Resolution Unit';

}
