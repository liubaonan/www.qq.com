<?PHP

/*
先声明类，实例化对象（创建对象），使用对象
$变量名=new类名称

$p=new Prison;
*/

$string = <<<ETO
			<li><a target="_blank" href="http://news.sina.com.cn/s/p/2015-08-13/132132200171.shtml">40 

岁大叔扮萝莉与男网友开房4次未被识破(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/p/2015-08-12/151332195706.shtml 

">新郎新婚当日闹完洞房轿车内性侵伴娘获刑(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/qw/2015-08-12/doc-ifxftkpv7074882.shtml 

">女子因贪污被判无期徒刑 10年怀孕14次躲避坐牢</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/2015-08-12/161832196009.shtml 

">民工冒充美女引诱工头露面成功讨薪</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/qw/2015-08-12/doc-ifxftvni8992829.shtml 

">骗子开假银行当天骗到4万 被抓后自称脑子进水</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/2015-08-11/210132192188.shtml 

">法律系男生苦追女生2年未果 毕业前将其强奸</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/pa/2015-08-13/doc-ifxftvni9017562.shtml 

">协警买5块钱卷馍嫌菜少 喊来城管亲哥打人砸摊</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/o/2015-08-13/doc-ifxfxraw8741278.shtml 

">男子360万买到曾出事故法拉利 起诉索赔1440万</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/o/2015-08-13/doc-ifxftvni9008963.shtml 

">女子偷用姐姐身份证结婚 离婚时被告知涉重婚</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/2015-08-12/doc-ifxftvni8962046.shtml 
">母亲茶馆打麻将儿子掉粪坑淹死 茶馆被判赔4万</a><>
    		<li><a target="_blank" href="http://news.sina.com.cn/s/p/2015-08-13/132132200171.shtml">40 

岁大叔扮萝莉与男网友开房4次未被识破(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/qw/2015-08-12/doc-ifxftkpv7074882.shtml 

">女子因贪污被判无期徒刑 10年怀孕14次躲避坐牢</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/p/2015-08-12/151332195706.shtml 

">新郎新婚当日闹完洞房轿车内性侵伴娘获刑(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/pa/2015-08-13/doc-ifxftvni9017562.shtml 

">协警买5块钱卷馍嫌菜少 喊来城管亲哥打人砸摊</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/2015-08-12/200732196640.shtml 

">男子为弟弟清扫旧居垃圾扫出两箱弹药</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/o/2015-08-13/doc-ifxftvni9008947.shtml 

">老人捅伤8岁外孙 放火烧女儿房子</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/pa/2015-08-13/doc-ifxfxzzn7427232.shtml 

">男子在北京三里屯优衣库门口砍倒一名女子(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/wh/2015-08-12/doc-ifxftkpx3786503.shtml 

">驴友在新疆徒步采摘超百株天山雪莲(图)</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/2015-08-11/115932190355.shtml 

">男子目睹女儿溺死不让救：不能让陌生男人碰</a><>
			<li><a target="_blank" href="http://news.sina.com.cn/s/wh/2015-08-13/doc-ifxftvni9017875.shtml 

">浙大城院学生寝室死亡多日 警方排除他杀可能</a><>
ETO;
$string = preg_replace("/[\r\n\t]/","",$string);



$pup=preg_match_all("/<li><a target=\"_blank\" href=\"(.*?)\">(.*?)<\/a><\>/is",$string,$liu);
var_dump($liu);


