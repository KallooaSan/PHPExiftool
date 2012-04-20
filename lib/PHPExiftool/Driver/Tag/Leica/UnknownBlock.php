<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

class UnknownBlock extends \PHPExiftool\Driver\Tag
{

    protected $Id = 769;

    protected $Name = 'UnknownBlock';

    protected $FullName = 'Panasonic::Leica6';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Unknown Block';

    protected $flag_Binary = true;

    protected $flag_Permanent = true;

}
