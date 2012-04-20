<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver;

/**
 * Metadata Object for mapping a Tag to a value
 *
 * @author      Romain Neutron - imprec@gmail.com
 * @license     http://opensource.org/licenses/MIT MIT
 */
class TagFactory
{

    /**
     * Build a Tag based on his Tagname
     *
     * @param string $tagname
     * @return \PHPExiftool\Driver\Tag
     * @throws \PHPExiftool\Exception\TagUnknown
     */
    public static function getFromRDFTagname($tagname)
    {
        $classname = self::classnameFromTagname($tagname);

        if ( ! class_exists($classname))
        {
            throw new \PHPExiftool\Exception\TagUnknown(sprintf('Unknown tag %s', $tagname));
        }

        return new $classname;
    }

    public static function hasFromRDFTagname($tagname)
    {
        return class_exists(self::classnameFromTagname($tagname));
    }

    protected static function classnameFromTagname($tagname)
    {
        $classname = '\PHPExiftool\Driver\Tag\\' . str_replace(':', '\\', $tagname);

        return \PHPExiftool\Tool\Command\ClassesBuilder::generateNamespace($classname);
    }

}
