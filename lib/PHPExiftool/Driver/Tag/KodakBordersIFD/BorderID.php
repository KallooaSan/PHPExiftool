<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KodakBordersIFD;

class BorderID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'BorderID';

    protected $FullName = 'Kodak::Borders';

    protected $GroupName = 'KodakBordersIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'KodakBordersIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Border ID';

}
