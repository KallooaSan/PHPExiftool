<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DV;

class AudioSampleRate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'AudioSampleRate';

    protected $Name = 'AudioSampleRate';

    protected $FullName = 'DV::Main';

    protected $GroupName = 'DV';

    protected $g0 = 'DV';

    protected $g1 = 'DV';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Sample Rate';

    protected $local_g2 = 'Audio';

}
