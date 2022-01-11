jQuery(function(){

  /* wow
  ------------------------------------------------- */
  new WOW().init();
  
  
  /* nav
  ------------------------------------------------- */
  let icon = jQuery('.nav-icon');
  let link = jQuery('.nav').find('a');
  
  icon.on('click', function() {
    jQuery('body').css('overflow-y', 'hidden');
    jQuery('body').toggleClass('_open');
  });
  link.on('click', function() {
    if (jQuery('body').hasClass('_open')) {
      jQuery('body').toggleClass('_open');
      jQuery('body').css('overflow-y','auto');
    }
  });
  
  
  /* カスタムプロパティ
  ------------------------------------------------- */
  let height = window.innerHeight;
  document.documentElement.style.setProperty( '--vh', height/100 + 'px');
  
  
  /* スムーススクロール
  ------------------------------------------------- */
  jQuery('a[href^="#"]').click(function() {
  let speed = 500;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  let position = jQuery(target).offset().top;
  jQuery("html, body").animate(
      {
      scrollTop: position
      },
      speed
  );
  return false;
  });
  
  
  /* ヘッダー
  ------------------------------------------------- */
  let mv = jQuery(".mv").innerHeight();
  
  jQuery(function() {
    var jQuerywin = jQuery(window),
        jQueryheader = jQuery('.header');
  
    jQuerywin.on('load scroll', function() {
      var value = jQuery(this).scrollTop();
      if (jQuery(this).scrollTop() >= mv) {
        jQueryheader.addClass('_show');
      } else {
        jQueryheader.removeClass('_show');
      }
    });
  });
  

    /* モダール
  ------------------------------------------------- */
  jQuery('#js-modal-open').click(function(e) {
    e.preventDefault();
    let target = jQuery(this).data("target");
    jQuery('.' + target).addClass('_show');
  
    return false;
  });
  
  jQuery('.modal-close').click(function(e) {
    e.preventDefault();
    let target = jQuery(this).data("target");
    jQuery('.' + target).removeClass('_show');
  
    return false;
  });
  
  
  
  });  