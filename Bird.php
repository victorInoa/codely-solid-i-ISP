<?php
    
    class Bird implements Flyer, Runner
    {
        
        public function run()
        {
            echo 'The Bird is runnig';
        }
        
        public function fly()
        {
         echo 'The Bird is Flying';
        }
    
    }