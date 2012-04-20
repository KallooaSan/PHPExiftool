<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\H264;

class CaptureFrameRate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'CaptureFrameRate';

    protected $FullName = 'H264::FrameInfo';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Capture Frame Rate';

}
