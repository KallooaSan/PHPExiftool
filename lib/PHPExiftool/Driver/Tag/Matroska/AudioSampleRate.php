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

class AudioSampleRate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 53;

    protected $Name = 'AudioSampleRate';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'float';

    protected $Writable = false;

    protected $Description = 'Audio Sample Rate';

    protected $local_g2 = 'Audio';

}
