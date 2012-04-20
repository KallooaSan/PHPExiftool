<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPAux;

class ApproximateFocusDistance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ApproximateFocusDistance';

    protected $Name = 'ApproximateFocusDistance';

    protected $FullName = 'XMP::aux';

    protected $GroupName = 'XMP-aux';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-aux';

    protected $g2 = 'Camera';

    protected $Type = 'rational';

    protected $Writable = true;

    protected $Description = 'Approximate Focus Distance';

}
