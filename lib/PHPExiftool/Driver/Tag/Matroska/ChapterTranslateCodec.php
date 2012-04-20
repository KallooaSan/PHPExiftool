<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Matroska;

class ChapterTranslateCodec extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10687;

    protected $Name = 'ChapterTranslateCodec';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Chapter Translate Codec';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Matroska Script',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'DVD Menu',
        ),
    );

}
