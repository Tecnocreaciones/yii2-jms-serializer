<?php

/*
 * This file is part of the BtoB Rewards package.
 * 
 * (c) www.btobrewards.com
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace krtv\yii2\serializer\metadata;

use JMS\Serializer\Metadata\PropertyMetadata;

/**
 * Description of YiiPropertyMetadata
 *
 * @author Carlos Mendoza <inhack20@gmail.com>
 */
class YiiPropertyMetadata extends PropertyMetadata 
{
    public function __construct($class, $name)
    {
        $this->class = $class;
        $this->name = $name;
    }
    
    public function getValue($obj) {
        $name = $this->name;
        return $obj->$name;
    }
    
    public function setValue($obj, $value) {
        $name = $this->name;
        $obj->$name = $value;
    }
}
