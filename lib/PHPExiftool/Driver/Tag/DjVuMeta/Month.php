<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DjVuMeta;

class Month extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'month';

    protected $Name = 'Month';

    protected $FullName = 'DjVu::Meta';

    protected $GroupName = 'DjVu-Meta';

    protected $g0 = 'DjVu';

    protected $g1 = 'DjVu-Meta';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Month';

    protected $local_g2 = 'Time';

}
