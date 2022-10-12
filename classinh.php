<?php

    class Box
    {
        var $len;
        var $wid;

        function Box($l, $w)
        {
            $this -> len = $l;
            $this -> wid = $w;
        }

        function show()
        {
            echo "<br><br> Len = ".$this -> len;
            echo "<br> Wid = ".$this -> wid;
        }
    }

    class Box3d extends Box
    {
        var $height;
        var $vol;

        function Box3d($l, $w, $h)
        {
            $this -> len = $l;
            $this -> wid = $w;
            $this -> height = $h;
            $this -> vol = $l * $w * $h;
        }

        function disp()
        {
            Box :: show();
            echo "<br><br> Height = ".$this -> height;
            echo "<br> volume = ".$this -> vol;
        }
    }

    // $b3 = new Box(10, 20);
    // $b3 -> show();

    $b = new Box3d(10, 20, 30);
    $b -> disp();

?>