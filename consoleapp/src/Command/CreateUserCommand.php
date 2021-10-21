<?php

// src/Command/CreateUserCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreateUserCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    public function __construct(bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
        // Taking Number Input Value
        ->addArgument('number', InputArgument::REQUIRED, 'Array length.')
        // ...
    ;
    }


    public function execute(InputInterface $input, OutputInterface $output): int
{
    

    // Send taken input to our min and max value calculator
    $output->writeln($this->appWrite($input->getArgument('number')));

    return 0;
}

    protected function appWrite($data)
    {
        // Creating array
        $numberList = array();

        //Random array generation
        for($i=0;$i<$data;$i++)
        {
            $numberList[$i]= rand(-1000, 1000);
            echo $numberList[$i]." ";
        }

        echo "\n";
        
        //Set our temp values first element of array
        //This eleman our beginning point
        $minValue = $numberList[0];
        $maxValue = $numberList[0];
        
        //We already have first elemant of array
        //Therefore our control begin with second element
        for($i=1;$i<($data);$i++)
        {
            //Comparise our temp(first element at beginning)
            if($numberList[$i] < $minValue)
            {
                //If smallest we have new min temp val
                $minValue = $numberList[$i];
            }
            elseif($numberList[$i] > $maxValue)
            {
                //If biggest we have new max temp
                $maxValue = $numberList[$i];
            }
            //If our comparison never enter the if or elseif block
            //This situation means equality
            //We dont need to manipulate our temp values
            //We can pass next element
        }
        //Print Our Element Count(Our Input)
        echo "Your Data : ".$data."\n";
        
        //Print Our Results
        echo "Min Value : ".$minValue."\n";
        echo "Max Value : ".$maxValue."\n";
        

        //RESULTS
        // PS C:\xampp\htdocs\consoleapp> php bin/console app:create-user 10
        // -846 -200 -417 -963 746 171 913 -42 298 -1000 
        // Your Data : 10
        // Min Value : -1000
        // Max Value : 913

        // PS C:\xampp\htdocs\consoleapp> php bin/console app:create-user 25
        // 787 749 621 972 603 -989 862 842 611 -690 528 447 887 89 502 203 -975 246 133 -536 439 -765 803 909 369 
        // Your Data : 25
        // Min Value : -989
        // Max Value : 972

        // PS C:\xampp\htdocs\consoleapp> php bin/console app:create-user 50
        // 732 -722 71 76 -72 -937 -14 422 552 -737 -431 -913 904 982 152 -276 646 310 193 51 -832 215 -323 882 -265 972 263 -356 867 -181 -570 -560 
        // 155 -539 103 177 -463 623 -919 -503 463 -313 -370 -864 823 753 880 589 -211 760
        // Your Data : 50
        // Min Value : -937
        // Max Value : 982

        // PS C:\xampp\htdocs\consoleapp> php bin/console app:create-user 100
        // 471 313 931 58 -752 147 -790 -301 -831 796 769 170 -355 -891 -175 361 -249 -666 275 -778 704 583 -554 915 416 888 -450 -566 -881 -455 -267 -493 117 -179 220 427 50 237 363 -108 -247 -819 -852 409 -834 -437 42 -641 80 257 -108 866 -970 371 541 367 -706 713 -337 -162 372 -742 788 -620 348 111 890 -826 -524 598 -112 -870 -181 75 349 802 -938 -299 393 223 -815 835 -804 779 -647 662 305 766 368 -272 -950 825 572 -315 -64 626 -59 -284 183 -706
        // Your Data : 100
        // Min Value : -970
        // Max Value : 931



    }
}

?>