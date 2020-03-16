<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MultiploLoopTest extends TestCase
{    
    public function testMultiplosTresCinco()    
    {        
        for ($i=1; $i <= 100; ($i++))        
        {   
            if($i % 3 === 0 && $i % 5 === 0)
            {                
                $this->assertTrue(true);                        
            }                    
        }       
    }
    
    public function testMultiploTres()
    {   
        for ($i=1; $i <= 100; $i++)        
        {   
            switch (0) 
            {
                case $i % 3:
                    $this->assertTrue(true); 
                    break;                  
            }            
        }        
    }
    
    public function testMultiploCinco()
    {          
        for ($i=1; $i <= 100; $i++)         
        {         
            switch (0) 
            {
                case $i % 5:
                    $this->assertTrue(true); 
                    break;                  
            }             
        }        
    }
    
}
