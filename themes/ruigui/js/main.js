////////////////////////////////////////////////////////////////////////////////
// 名称: 主程序
// 作者: Steven
// 说明: Require jQuery
// 更新: 2015-2-26
////////////////////////////////////////////////////////////////////////////////

// Main
(function(win, undefined) {
  'use strict';

  // Helper
  // var nav = win.navigator;
  // var loc = win.location;
  var doc = win.document;
  var html = doc.documentElement;

  // var isIE6 = navigator.userAgent.indexOf('MSIE 6.0') !== -1;
  // var isIE6 = !!window.ActiveXObject && !window.XMLHttpRequest;
  // var isIE10 = navigator.userAgent.indexOf('MSIE 10.0') !== -1;
  // var isIE11 = /\btrident\/[0-9].*rv[ :]11\.0/.test(navigator.userAgent);
  // var isIE678 = /\bMSIE [678]\.0\b/.test(navigator.userAgent);

  var isString = function(val) {
    return Object.prototype.toString.call(val) === '[object String]';
  };

  var $id = function(id) {
    // return 'string' === typeof id ? document.getElementById(id) : id;
    return isString(id) ? document.getElementById(id) : id;
  };

  // 加载脚本
  var loads = $id('headjs').getAttribute('data-loads').split(', ');
  head.load(loads, function() {
    // 通用变量
    var $win = $(win);
    var $html = $(html);
    var animationend = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    // 动画完成后删除类
    // $win.on(animationend, function() {
    //   $sections.find('.animated').removeClass('animated bounceIn bounceInUp bounceInRight swing');
    // });

    // 返回顶部
    // $('#toolbar').on('click', '.gotop', function() {
    //   // window.scrollTo(0, 0);
    //   // $('html, body').scrollTop(0);
    //   $('html, body').animate({
    //     scrollTop: 0
    //   }, 600);
    //   return false;
    // });

    // 转到
    // $scrollnav.on('click', 'a', function() {
    //   var $this = $(this);
    //   var filter = $this.attr('href').replace('#', '.');

    //   // $this.addClass('on').parent().siblings().find('a').removeClass('on');

    //   $('html, body').animate({
    //     scrollTop: $sections.filter(filter).offset().top
    //   }, 'swing', function() {
    //     $this.addClass('on').parent().siblings().find('a').removeClass('on');
    //   });
    //   return false;
    // });

    // 点亮导航
    // $win.scroll(function() {
    //   var scrollTop = $('body').scrollTop() || $html.scrollTop();
    //   // console.log(scrollTop);
    //   $sections.each(function() {
    //     var $this = $(this);
    //     var scetionName = $this.attr('rel');
    //     var offsetTop = $this.offset().top;

    //     if (scrollTop > offsetTop - 10) {
    //       $scrollnav.find('a').filter('[href=#' + scetionName + ']').addClass('on')
    //       .parent().siblings().find('a').removeClass('on');
    //     }
    //   });
    // });

    // init superslide
    $('#m-sld').slide({
      mainCell: '.bd ul',
      autoPlay: true
    });

    // 页脚固底
    (function() {
      var $footer = $('#sub-footer').parent('footer');
      var styleStr = $footer.attr('style') || '';
      var $holder = $('<div/>');

      $win.on('resize', function() {
        var footerHeight = $footer.outerHeight();
        var winHeight = $win.height();
        // var docHeight = $(document).height();
        var bodyHeight = $(document.documentElement).height();
        var footerHeight = $footer.outerHeight();

        // DEBUGGING STUFF
        // console.log(styleStr);
        // console.log('Body height: ', $(document.body).height());
        // console.log('DocumentElement height: ', $(document.documentElement).height());
        // console.log('Document height: ', docHeight);
        // console.log('Window height: ', winHeight);
        // console.log('Footer height: ', footerHeight);
        // console.log('------------------------------')

        // 如果页面内容高度小于屏幕高度，页脚将绝对定位到屏幕底部
        if (bodyHeight < winHeight) {
          $holder.insertBefore($footer).height(footerHeight);
          $footer.css({
            position: 'absolute',
            left: 0,
            right: 0,
            bottom: 0
          }); //.stop().animate({bottom: 0});
        } else {
          $holder.remove();
          $footer.attr('style', styleStr);
        }
      });
    })();
  });
})(window);