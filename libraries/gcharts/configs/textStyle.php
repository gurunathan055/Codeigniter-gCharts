<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Text Style Properties Object
 *
 * An object containing all the values for the textStyle which can be
 * passed into the chart's options
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0
 * which is included in the LICENSE file
 *
 *
 * @author Kevin Hill <kevinkhill@gmail.com>
 * @copyright (c) 2013, Kevin Hill
 * @link https://github.com/kevinkhill/Codeigniter-gCharts Github Page
 * @license http://http://www.apache.org/licenses/LICENSE-2.0.html Apache-V2
 *
 */

class textStyle extends configOptions
{
    var $color;
    var $fontName;
    var $fontSize;

    public function __construct($options = array()) {

        $this->options = array(
            'color',
            'fontName',
            'fontSize'
        );
        
        if(is_array($options) && count($options) > 0)
        {
            foreach($options as $option => $value)
            {
                if(in_array($option, $this->options))
                {
                    $this->$option($value);
                }
            }
        }

        return $this;
    }

    /**
     * Assign a color for the text element that this textStyle will be applied to
     * in the format of a valid HTML color string, for example: colors:['red','#004411'].
     * 
     * @param string $color
     * @return \textStyle
     */
    public function color($color)
    {
        if(is_string($color))
        {
            $this->color = $color;
        } else {
            $this->color = 'black';
        }

        return $this;
    }

    /**
     * Assigns a font to the textStyle object, must be a valid font name
     * 
     * @param sting $fontName
     * @return \textStyle
     */
    public function fontName($fontName)
    {
        if(is_string($fontName))
        {
            $this->fontName = $fontName;
        } else {
            $this->fontName = 'Arial';
        }

        return $this;
    }

    /**
     * Assigns a font size to the textStyle, must be a valid int or a string 
     * representing an int.
     * 
     * @param mixed $fontSize
     * @return \textStyle
     */
    public function fontSize($fontSize)
    {
        if(is_int($fontSize) || is_string($fontSize))
        {
            $this->fontSize = $this->_valid_int($fontSize);
        } else {
            $this->fontSize = 12;
        }

        return $this;
    }

}

/* End of file textStyle.php */
/* Location: ./gcharts/configs/textStyle.php */