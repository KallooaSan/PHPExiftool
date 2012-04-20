<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPExif;

class SceneType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SceneType';

    protected $Name = 'SceneType';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Scene Type';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Directly photographed',
        ),
    );

}
