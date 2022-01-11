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


/* コンタクト　placeholder
------------------------------------------------ */
jQuery(function(){
  jQuery('select').on('change', function(){
      if(jQuery(this).val() == "placeholder"){
          jQuery(this).css('color','#EFE4E1')
      } else {
          jQuery(this).css('color','#555')
      }
  });
});

      
  
});