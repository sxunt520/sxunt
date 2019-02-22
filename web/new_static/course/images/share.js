function openMore(){
	jQuery(".share_parent").show();
	jQuery("#at20mc").hide();
}


function openQqfav() {
    window.open('http://shuqian.qq.com/post?from=3&uri=' + pageUrl + '&title=' + pageTitle + '&pic=');
    return false;
}

function openTxfr() {
    window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url=' + pageUrl + '&title=' + pageTitle + '&desc=&summary=');
    return false;
}

function openTaobao() {
    window.open('http://share.jianghu.taobao.com/share/addShare.htm?url=' + pageUrl + '&title=' + pageTitle );
    return false;
}

function openZhuaxia() {
    window.open('http://www.zhuaxia.com/add_channel.php?url=' + pageUrl + '&title=' + pageTitle );
    return false;
}

function openBdsc(){
	window.open('http://cang.baidu.com/do/add?iu=' + pageUrl + '&it=' + pageTitle + '&fr=ien#nw=1');
	return false;
}

function openTieba(){
	window.open('http://tieba.baidu.com/i/app/open_share_api?link=' + pageUrl );
	return false;
}

function openTianya(){
	window.open('http://co.tianya.cn/third/export/thirdLoginDiv.jsp?fowardURL=http://share.tianya.cn/openapp/restpage/activity/appendDiv.jsp?ccUrl=' + pageUrl + '&ccTitle=' + pageTitle +'&ccBody=');
	return false;
}

function openFanfou() {
    window.open('http://fanfou.com/sharer?u=' + pageUrl + '&t=' + pageTitle );
    return false;
}

function openPoco() {
    window.open('http://my.poco.cn/fav/storeIt.php?u=' + pageUrl + '&t=' + pageTitle );
    return false;
}

function openMyspace() {
    window.open('http://www.myspace.com/Modules/PostTo/Pages/?u=' + pageUrl + '&t=' + pageTitle );
    return false;
}

function openTifeng() {
    window.open('http://t.ifeng.com/interface.php?_c=share&_a=share&sourceUrl=' + pageUrl + '&title=' + pageTitle + '&pic=&source=1');
    return false;
}

function openSohu() {
    window.open('http://bai.sohu.com/share/blank/add.do?link=' + pageUrl );
    return false;
}

function openT63() {
    window.open('http://t.163.com/article/user/checkLogin.do?info=' + pageTitle + '' + pageUrl + '&images=' );
    return false;
}

//var shareMore = {"tsohu":"t.sohu.com/third/post.jsp","t163":"t.163.com/article/user/checkLogin.do","qzone":"sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey","hi":"apps.hi.baidu.com/share/","msn":"profile.live.com/badge","feixin":":space.fetion.com.cn/api/share","xianguo":"www.xianguo.com/subscribe.php","mop":"tk.mop.com/api/post.htm","139":"www.139.com/share/share.php"};
function shareSendTo(id){
	window.open('http://s.jiathis.com/?webid=' + id + '&url=' + pageUrl + '&title=' + pageTitle );
	return false;
}




