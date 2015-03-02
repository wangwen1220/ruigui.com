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
  // var loads = $id('headjs').getAttribute('data-loads').split(', ');
  var headconf = {
    // headjs node
    node: $id('headjs'),

    // headjs 的基础路径
    base: function() {
      return this.node.src.slice(0, this.node.src.lastIndexOf('/') + 1);
    },

    // 路径配置
    // paths: {
    //   'public': '/public/'
    // },

    // 别名配置
    alias: function() {
      return {
        'jquery': this.base() + 'jquery-1.11.2.js',
        'easing': this.base() + 'jquery-easing.js',
        'superslide': this.base() + 'jquery-superslide.js'
      };
    },

    // 预加载项
    // preload: [
    //   Function.prototype.bind ? '' : 'es5-safe',
    //   this.JSON ? '' : 'json'
    // ],

    // 每个页面要加载的文件映射
    maps: {
      'common': ['jquery', 'easing'],
      'home': ['jquery', 'easing', 'superslide'],
      'products': ['jquery', 'easing', 'superslide'],
      'news': ['jquery', 'easing', 'superslide']
    },

    files: function() {
      // 用于标识页面要加载哪些文件
      var map = this.node.getAttribute('data-map') || 'common';
      var mapalias = this.maps[map];
      var alias = this.alias();
      var files = [];

      for (var i = 0; i < mapalias.length; i++) {
        files.push(alias[mapalias[i]]);
      }

      return files;
    }
  }

  // console.log(headconf.files());
  head.load(headconf.files(), function() {
    // 通用变量
    var $win = $(win);
    var $html = $(html);
    var $header = $('#header');
    var $main = $('#main');
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
    // $header.on('click', 'nav a', function() {
    //   var $this = $(this);
    //   var hash = $this.attr('href');

    //   // 如果不是单面链接则不处理
    //   if (!/^#.+/.test(hash)) return;

    //   hash = hash.replace('#', '.');
    //   $this.addClass('on').parent().siblings().find('a').removeClass('on');

    //   $('html, body').animate({
    //     scrollTop: $main.find(hash).offset().top
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


    // superslide
    if ($.fn.slide) {
      // // banner 幻灯片
      // $('#banner').slide({
      //   titCell: '.hd ul',
      //   mainCell: '.bd ul',
      //   // trigger: 'click',
      //   effect: 'fold',
      //   autoPage: true,
      //   autoPlay: true
      // });

      $('#m-sld').slide({
        mainCell: '.bd ul',
        autoPlay: true
      });
    }

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