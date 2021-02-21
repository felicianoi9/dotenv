<?php

use Felicianoi9\DotEnv\DotEnv;
use PHPUnit\Framework\TestCase; 

final class DotEnvTest extends TestCase
{
    /**
     * Exists root path
     */

    public function test1()
    {
        $dotEnv = new DotEnv(__DIR__."/..");
        $this->assertDirectoryExists($dotEnv->getPath());               

    }  
    
    /**
     * Class has path atribute
     */
    
     public function test2()
    {
        $dotEnv = new DotEnv(__DIR__."/..");
        $this->assertObjectHasAttribute('path', $dotEnv);
         
    }
        
    /**
     * Exists .env file into root path
     */
    public function test3()
    {
        
        $this->assertFileExists(__DIR__."/../.env");
    }

    
    /**
     * Class is reading .env file into root path
     */
    public function test4()
    {
        (new DotEnv(__DIR__."/../.env"))->load();
        
        $this->assertContains('felicianoi9', $_ENV);

    }
}