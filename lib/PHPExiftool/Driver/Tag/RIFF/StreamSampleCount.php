<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RIFF;

class StreamSampleCount extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'StreamSampleCount';

    protected $FullName = 'RIFF::StreamHeader';

    protected $GroupName = 'RIFF';

    protected $g0 = 'RIFF';

    protected $g1 = 'RIFF';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Stream Sample Count';

    protected $Index = 2;

}
