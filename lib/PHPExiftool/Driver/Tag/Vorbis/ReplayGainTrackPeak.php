<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Vorbis;

class ReplayGainTrackPeak extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'REPLAYGAIN_TRACK_PEAK';

    protected $Name = 'ReplayGainTrackPeak';

    protected $FullName = 'Vorbis::Comments';

    protected $GroupName = 'Vorbis';

    protected $g0 = 'Vorbis';

    protected $g1 = 'Vorbis';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Replay Gain Track Peak';

}
