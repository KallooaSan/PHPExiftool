<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

class Face5Position extends \PHPExiftool\Driver\Tag
{

    protected $Id = 20;

    protected $Name = 'Face5Position';

    protected $FullName = 'Nikon::FaceDetect';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 5 Position';

    protected $flag_Permanent = true;

}
