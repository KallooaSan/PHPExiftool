<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Flash;

class Stereo extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'stereo';

    protected $Name = 'Stereo';

    protected $FullName = 'Flash::Meta';

    protected $GroupName = 'Flash';

    protected $g0 = 'Flash';

    protected $g1 = 'Flash';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Stereo';

    protected $local_g2 = 'Audio';

}
