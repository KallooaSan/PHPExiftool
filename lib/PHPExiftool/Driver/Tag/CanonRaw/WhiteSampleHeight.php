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

class WhiteSampleHeight extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'WhiteSampleHeight';

    protected $FullName = 'CanonRaw::WhiteSample';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'White Sample Height';

    protected $flag_Permanent = true;

}
