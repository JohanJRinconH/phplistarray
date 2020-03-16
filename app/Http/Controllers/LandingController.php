<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function FillArray() {
        $list=[];                        

        for ($i=1; $i <= 100; $i++)
        {
            if($i % 3 === 0 && $i % 5 === 0)
            {                
                $list[] = 'Linianos';
                continue;
            }
    
            switch (0) 
            {
                case $i % 3:
                    $list[] = 'Linio';
                    break;

                case $i % 5:
                    $list[] ='IT';
                    break; 

                default:
                $list[] = $i;
                    break;
            }        
        }
        return view('landing', compact('list')); 
    }

}
