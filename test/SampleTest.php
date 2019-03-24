<?php
require_once "vendor/autoload.php";
class SampleTest extends \PHPUnit_Framework_TestCase{

          public function testTestClassConstruct(){
          	     $testClass= new \TestClassController('Reformed','Tech');
          	     $this->assertSame('Reformed',$testClass->string1);
          	     $this->assertSame('Tech',$testClass->string2);
          }


          public function testExecutionMethod(){
          				$testClass= new \TestClassController('Reformed','Tech');


          				$this->assertCount(100+1,$testClass->execution());

          				 $datas=$testClass->execution();

          				   $this->assertSame('Reformed',$datas[3]);
          				   $this->assertSame('Tech',$datas[5]);
          				   $this->assertSame('ReformedTech',$datas[15]);

          				  }





          }

