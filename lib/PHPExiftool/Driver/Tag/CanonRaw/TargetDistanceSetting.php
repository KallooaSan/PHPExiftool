<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonRaw;

class TargetDistanceSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6151;

    protected $Name = 'TargetDistanceSetting';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'float';

    protected $Writable = true;

    protected $Description = 'Target Distance Setting';

    protected $flag_Permanent = true;

}
