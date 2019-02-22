
jQuery(document).ready(function(){
	jQuery('#share_button').mouseover(function() {
		//jQuery("#at15s").css("right", "-38px");
		jQuery("#at20mc").show();
	});
	
	jQuery('#share_button').mouseout(function() {
		jQuery("#at20mc").hide();
	});
});

var pageUrl = encodeURIComponent(document.location);
var pageTitle = encodeURIComponent(document.title);

//douban
function openDouban() {
    var d = document,
		e = encodeURIComponent,
		s1 = window.getSelection,
		s2 = d.getSelection,
		s3 = d.selection,
		s = s1 ? s1() : s2 ? s2() : s3 ? s3.createRange().text : "",
		r = "http://www.douban.com/recommend/?url=" + pageUrl + "&amp;title=" + pageTitle + "&amp;sel=" + e(s) + "&amp;v=1",
		x = function() {
		    if (!window.open(r)) {
		        location.href = r + "&amp;r=1";
		    }
		};
    if (/Firefox/.test(navigator.userAgent)) {
        setTimeout(x, 0);
    } else {
        x();
    }
}

//baidu
function openBaidu() {
    window.open("http://cang.baidu.com/do/add?it=" + pageTitle + "&iu=" + pageUrl + "&fr=ien#nw=1");
}

//sina
function openSina() {
    window.open('http://v.t.sina.com.cn/share/share.php?url=' + pageUrl + '&title=' + pageTitle);
}

//kaixin
function openKaixin() {
    window.open('http://www.kaixin001.com/repaste/share.php?rurl=' + pageUrl + '&rtitle=' + pageTitle + '&rcontent=' + pageTitle);
}

//renren
function openRenren() {
    window.open('http://share.renren.com/share/buttonshare.do?link=' + pageUrl + '&title=' + pageTitle, '_blank');
}

//email
function openEmail() {
	document.location="mailto:?body="+pageUrl;
}

//Tencent
function openTencent(){
	var _t = encodeURI(document.title);
	var _url = encodeURI(document.location);
	var _appkey = encodeURI("appkey");
	var _pic = encodeURI('');
	var _site = '';
	var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic;
	 
	window.open( _u,'Tencent', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
}

//Add the link to 400 number
function Add400link(){
  for (var i=0;i<arguments.length;i++)
   {
    arguments[i].css("cursor","pointer").unbind().click(function(){
      window.location.href = "/contact/index.html";
    });
   }
  }
jQuery(function(){
  var callCanon = jQuery(".crumbs img[src*='call_canon.gif'][alt*='4006-222666']");
  var callCanon1 = jQuery(".crumbnew img[src*='tel.gif'][alt*='4006-222666']");
  var callCanon2 = jQuery(".crumbnew img[src*='tel1.gif']");
  Add400link(callCanon,callCanon1,callCanon2);
})