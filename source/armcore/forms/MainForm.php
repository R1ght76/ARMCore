<?php
namespace armcore\forms;

use std, gui, framework, armcore;
use php\gui\UXDialog; 


class MainForm extends AbstractForm
{

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		UXDialog::showAndWait('OS:Lineage OS 19 CPU:Any RAM:2 GB Minium Storage: 8 GB ');

        
    }

    /**
     * @event button4.click 
     */
    function doButton4Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		browse('https://wowroms.com/ru/roms/list/Playstation');

        
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		UXDialog::show('dont work');

        
    }

    /**
     * @event button8.click 
     */
    function doButton8Click(UXMouseEvent $e = null)
    {    
        $this->runAsAdministrator(".\\delete.exe");
    }

    /**
     * @event button9.click 
     */
    function doButton9Click(UXMouseEvent $e = null)
    {    
        $this->runAsAdministrator(".\\install.exe");
    }
   
   function runAsAdministrator($programPath) {
    
    $command = "powershell -Command \"Start-Process '$programPath' -Verb RunAs\"";

     execute($command);  
        
        
    }
}
