<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    private $clicks = 0;

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->clicks++;
        $this->labelAlt->text = $this->clicks;
    }

    /**
     * @event rectAlt.click-Left 
     */
    function doRectAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

}
