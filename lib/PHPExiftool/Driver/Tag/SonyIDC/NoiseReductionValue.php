<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SonyIDC;

class NoiseReductionValue extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32807;

    protected $Name = 'NoiseReductionValue';

    protected $FullName = 'SonyIDC::Main';

    protected $GroupName = 'SonyIDC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SonyIDC';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Noise Reduction Value';

    protected $flag_Permanent = true;

}
