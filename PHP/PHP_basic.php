<h2> PHP Basic </h2>
<meta charset="UTF-8">
<p>
    <?php
        echo "This is a PHP script. <br> ";
        echo "<br>";
        // Declaring variable -> ans for multiple two numbers 
        $ans = 2*2;
        echo " 2 x 2 = <b> $ans </b><br>";
        print " 2 x 2 = <b> $ans </b><br>";
        echo "<br>";
    ?>
</p>

<p>
    <?php

        
        // backslash(\)is used as an “escape” character.
        // Concatenation is the"." not "+" (morelater).
        # This is a shell-style comment
        /* echo is a language construct-can be treated like a function with one parameter. Without parentheses, it accepts multiple parameters.
        */
        /* print is a function-only one parameter, but parentheses are optional so it can look like a language construct.
        */
        
        // Example below is of auto typecasting. 
        echo "<br>";
        $x = "5" + 5 ;
        echo $x;
        echo "<br>";
        
        
        echo "Sum of x=15, y=15 and x++ = ";
        $x = 15;
        $y = 15 + $x++;
        echo $x + $y;
        
        echo "<br>";
        echo "<br>";
        // concatenation of strings 
        $a = "Hello " . "Viewer !";
        echo $a ;
        echo "<br>";

        // Ternary operations 
        $value = 24;
        $test = 10;
        echo "Value is 24";
        $comp = $value > $test ? "Value is more than test value." : "Value is less than test value.";
        echo "<br>";
        echo "First operation: $comp \n";
        echo "<br>";
        $oe = ($value % 2 == 0) ? "Value is Even." : "Value is Odd.";
        echo "Second Operation: $oe";
        
        echo "<br>";
        echo "A".FALSE."B<br>";
        echo "A".TRUE."B";
        echo "<br><br>";
        
        echo "Georg August-University-Göttengen";
        $name = "Georg August-University-Göttengen";
        echo "Position of 'August' : " .strpos($name, "August");
        echo "<br>";
        
        $value = 10;
        if ($value == 10)
        {
            print "Hidden value is 10";
        }
        else 
        {
            print "Hidden value is not 10";
        }
        // control flow could be extended by "elseif"
        
        echo "<br>";
        $value=1;
        while($value<=10)
        {
            echo "$value<br>";
            $value++;
        }
        
        echo "<br><br>";
        echo "<b>Table of 9 </b><br>";
        $table9 = 1;
        while($table9 <= 10)
        {
            echo "9 x $table9 = " . $table9 * 9 . "<br>";
            $table9++;
        }
        
        echo "<br><br>";
        echo "<b>Table of 12 </b><br>";
        for($counter=1; $counter<=10; $counter++)
        {
            echo "12 x $counter =". $counter*12;
            echo "<br>";
        }
        
        echo "<br><br>";
        $arr1 = array();
        $arr1["name"] = "Yuvraj";
        $arr1["Field"]="Science";
        echo (isset($arr1['name']) ? "name is set \n" : "name is not set \n" );
        echo "<br><br>";
        
        // some PHP functions 
        
        function func1()
        {
            echo strrev("emoclew");echo "<br>";
            echo "  Lenght of <b>welcome</b> is =>";
            echo strlen("welcome");
            echo "<br>";
            echo str_repeat("Hello! ", 2);
        }
        echo "<br>";
        func1();
        print func1() . "<b>Viewer</b>";echo "<br><br>";
        
        function lang($lang)
        {
            if ($lang=="en") return "Hello ";
            if ($lang=="de") return "Moin ";
            if ($lang=="hi") return "नमस्ते ";
        }
        print lang('de') . "Deutschland.";echo "<br>";
        print lang('en') . "England.";echo "<br>";
        print lang('hi') . "India.";echo "<br><br>";
        
        
        // call by reference.
        function deca(&$ori)
        {
            $ori = $ori * 10;
        }
        $val = 10;
        deca($val);
        echo "x10 of 10 = $val <br>";
        
        // "id" is for browser i.e. HTML & CSS, but "name" is used by server
        // "name" is "Key" in server and input is "Value".
    ?>
</p>
