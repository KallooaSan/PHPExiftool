<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class MakerNoteVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'MakerNoteVersion';

    protected $FullName = 'Pentax::S1';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Maker Note Version';

    protected $flag_Permanent = true;

}
