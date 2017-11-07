<div class=container>
    <div class=row>
        <div class="col-xs-2"></div>


        <div class=col-xs-8>
            <div class="welcomediv"><h1>Autólista</h1></div>

            <?php
            $page = null;
            $carnumber = null;

            $limit = 10;


            //lapozó linkek

            //$linklimit = 10;
            //$linklimit2 = $linklimit / 2;
            //$linkoffset = ($page > $linklimit2) ? $page - $linklimit / 10 : 0;
            //$linkend = $linkoffset+$linklimit;
            //
            //if ($maxpage - $linklimit2 < $page)
            //{
            //        $linkoffset = $maxpage - $linklimit;
            //        if ($linkoffset < 0)
            //        {
            //                $linkoffset = 0;
            //        }
            //        $linkend = $maxpage;
            //}
            //$offset = ($page-1) * $limit;
            //
            //if ($page > 1)
            //{
            //        print "<a href='?page=".($page-1)."'>Előző</a>   ";
            //}
            //for ($i=1+$linkoffset; $i <= $linkend and $i <= $maxpage; $i++)
            //{
            //
            //        print "<a href='?page=$i'>[$i. oldal]</a>   ";
            //}


            // A listában megkapott autók adatainak kilistázása
            // ha be van jelentkezve az illető, akkor megjelennek a szerkesztés és a törlés linkek is.




            ?>


        </div>


        <div class=col-xs-2></div>
    </div>
</div>


