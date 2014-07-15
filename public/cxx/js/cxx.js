$(document).ready(function(){
  //鼠标悬停 图片展开和关闭 begin
  var $listPic = $(".p-list ul li img");
  $(".p-list ul li").mouseover(function(){
    var a= $(this).find("img").width();
    var b= $(this).width();
    var c= $(this).find("img").attr("alt");
    $(this).css("width",a);
    $(this).parent().parent().parent().find("dt").text(c);
  });
  $(".p-list ul li").mouseout(function(){
    $(this).css("width",20);
  });
  //鼠标悬停 图片展开和关闭 end
  //給元素指定随机背景 begin 
  var cArr=["#fe3e64","#000000","#47d1de","#00b26f","#89d6aa","#00b26f","#dda0f6","#8e7de5"]; //背景组
  var index=parseInt(Math.random()*cArr.length); //获取背景组
  cArr[index]
  $(".p-list li").css({
    "background":cArr[index]
  });
  //給元素指定随机背景 end 
});
