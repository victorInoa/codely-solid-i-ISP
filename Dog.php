<?php
 
    
    class Dog implements Bark, Runner
    {
        public function run()
        {
            echo 'Dog is runnig';
        }
        
        public function bark()
        {
            echo 'Dog is Barking';
        }
    }