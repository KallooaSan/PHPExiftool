<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEVideo;

class Duration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Duration';

    protected $Name = 'Duration';

    protected $FullName = 'MIE::Video';

    protected $GroupName = 'MIE-Video';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Video';

    protected $g2 = 'Video';

    protected $Type = 'rational64u';

    protected $Writable = false;

    protected $Description = 'Duration';

}
