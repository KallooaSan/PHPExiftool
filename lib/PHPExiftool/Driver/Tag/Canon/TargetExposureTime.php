<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

class TargetExposureTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'TargetExposureTime';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Target Exposure Time';

    protected $flag_Permanent = true;

}
