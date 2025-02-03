<?php
namespace armcore\forms;

use std, gui, framework, armcore;


class MainForm extends AbstractForm
{


    /**
     * @event button4.click 
     */
    function doButton4Click(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://wowroms.com/ru/roms/list/Playstation');
    }



    /**
     * @event button9.click 
     */
    function doButton9Click(UXMouseEvent $e = null)
    {    
        $this->runAsAdministrator(".\\install.exe");
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        $this->runAsAdministrator(".\\delete.exe");
    }

    /**
     * @event button5.click 
     */
    function doButton5Click(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://wowroms.com/ru/roms/list/playstation+2');
    }

    /**
     * @event button6.click 
     */
    function doButton6Click(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('https://wowroms.com/ru/roms/list/Playstation+Portable');
    }


   
   function runAsAdministrator($programPath) {
    
    $command = "powershell -Command \"Start-Process '$programPath' -Verb RunAs\"";

     execute($command);  
        
        
    }
}
