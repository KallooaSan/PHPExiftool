<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sigma;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 22;

    protected $Name = 'Quality';

    protected $FullName = 'Sigma::Main';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Quality';

    protected $flag_Permanent = true;

}
