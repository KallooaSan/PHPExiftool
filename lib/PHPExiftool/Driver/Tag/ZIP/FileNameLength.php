<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ZIP;

class FileNameLength extends \PHPExiftool\Driver\Tag
{

    protected $Id = 19;

    protected $Name = 'FileNameLength';

    protected $FullName = 'ZIP::RAR';

    protected $GroupName = 'ZIP';

    protected $g0 = 'ZIP';

    protected $g1 = 'ZIP';

    protected $g2 = 'Other';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'File Name Length';

}
