<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MakerNotes;

class PreviewImageHeight extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'PreviewImageHeight';

    protected $FullName = 'QuickTime::Flip';

    protected $GroupName = 'MakerNotes';

    protected $g0 = 'QuickTime';

    protected $g1 = 'MakerNotes';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Preview Image Height';

}
