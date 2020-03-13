<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function FillArray() {
        $list=[];                        

        for ($i=1; $i <= 100; $i++)
        {
            if(is_int($i/3) && is_int($i/5))
            {                
                $list[$i] = 'Linianos';
                continue;
            }
    
            switch (true) 
            {
                case is_int($i/3):
                    $list[$i] = 'Linio';
                    break;

                case is_int($i/5):
                    $list[$i] ='IT';
                    break; 

                default:
                $list[$i] = $i;
                    break;
            }        
        }             
        return view('landing', compact('list'));          
       
    }

}
