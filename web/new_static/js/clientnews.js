
/*
**************************
(C)2010-2012 phpMyWind.com
update: 2012-5-15 13:03:07
person: Feng
**************************
*/

var marqueeString = new Array();
	marqueeString[0] = '<span>[始渲开发组公告]</span><a href="http://www.sxunt.com" target="_blank">再一次改变!你们所需的就是我们需要完成的!</a><br />';
	//marqueeString[1] = '<span>[开发组公告]</span>亲爱的P粉儿，您可以通过我们的 <a href="http://phpMyWind.com" target="_blank">官网</a> <a href="http://phpMyWind.com/bbs" target="_blank">论坛</a> 以及 <a href="http://weibo.com/phpMyWind" target="_blank">新浪微博</a> 和 <a href="http://t.qq.com/phpMyWind" target="_blank">腾讯微博</a> 来获取更多资讯。<br />';

var marqueeInterval = new Array();
var marqueeId       = 0;
var marqueeDelay    = 5000;
var marqueeSpeed    = 20;
var marqueeHeight   = 25;


function InitMarquee()
{
	var str      = marqueeString[0];
	var newsArea = document.getElementById("shownews");
	newsArea.className = "";
	newsArea.innerHTML = '<div id="marqueeBox" style="overflow:hidden;height:'+marqueeHeight+'px" onmouseover="clearInterval(marqueeInterval[0])" onmouseout="marqueeInterval[0]=setInterval(\'StartMarquee()\',marqueeDelay)"><div>'+str+'</div></div>';
	marqueeId++;
	marqueeInterval[0] = setInterval("StartMarquee()", marqueeDelay);
}

function StartMarquee()
{
	var str = marqueeString[marqueeId];
	marqueeId++;

	if(marqueeId >= marqueeString.length)
	{
		marqueeId = 0;
	}

	if(marqueeBox.childNodes.length == 1)
	{
		var NextLine = document.createElement('div');
		NextLine.innerHTML = str;
		marqueeBox.appendChild(NextLine);
	}

	else
	{
		marqueeBox.childNodes[0].innerHTML = str;
		marqueeBox.appendChild(marqueeBox.childNodes[0]);
		marqueeBox.scrollTop = 0;
	}

	clearInterval(marqueeInterval[1]);
	marqueeInterval[1] = setInterval("scrollMarquee()", marqueeSpeed);
}

function scrollMarquee()
{
	marqueeBox.scrollTop++;
	if(marqueeBox.scrollTop % marqueeHeight == (marqueeHeight-1))
	{
		clearInterval(marqueeInterval[1]);
	}
}

InitMarquee();