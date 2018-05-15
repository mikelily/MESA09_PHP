<?php
    $testTXT
        = "<div class=\"r-ent\">
			<div class=\"nrec\"><span class=\"hl f1\">爆</span></div>
			<div class=\"title\">
			
				<a href=\"/bbs/Beauty/M.1526190596.A.7A0.html\">[正妹] 知恩</a>
			
			</div>
			<div class=\"meta\">
				<div class=\"author\">yingrenhao</div>
				<div class=\"article-menu\"><span class=\"hl f1\">爆</span>
					
					<div class=\"trigger\">&#x22ef;</div>
					<div class=\"dropdown\">
						<div class=\"item\"><a href=\"/bbs/Beauty/search?q=thread%3A%5B%E6%AD%A3%E5%A6%B9%5D&#43;%E7%9F%A5%E6%81%A9\">搜尋同標題文章</a></div>
						
						<div class=\"item\"><a href=\"/bbs/Beauty/search?q=author%3Ayingrenhao\">搜尋看板內 yingrenhao 的文章</a></div>
						
					</div>
					
				</div>
				<div class=\"date\"> 5/13</div>
				<div class=\"mark\"></div>
			</div>
		</div>
";
    $bb = strpos($testTXT,"<span class=\"hl f1\">爆</span>");
    echo $bb .'<br>';
    $aa = explode("<span class=\"hl f1\">爆</span>",$testTXT);
    echo count($aa);
    //    var_dump($aa);

//    $input1 = "hello";
//    $input2 = "hello,there";
//    $input3 = ',';
//    var_dump(explode(',',$input1));
//    var_dump(explode(',',$input2));
//    var_dump(explode(',',$input3));