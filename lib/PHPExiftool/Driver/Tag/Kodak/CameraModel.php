<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Kodak;

class CameraModel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Camera';

    protected $Name = 'CameraModel';

    protected $FullName = 'Kodak::TextualInfo';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Camera Model';

    protected $flag_Permanent = true;

}
