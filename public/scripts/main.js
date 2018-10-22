// CEK DEVICE RES TO SET MENU
function setMenu(){
  if ($(window).width() < 767) {
    $('body').addClass('menu-collapse');
  }else{
    $('body').removeClass('menu-collapse');
  }
}setMenu();

// TOGGLE MENU FUNCTION
$('.menu-toggle').click(function() {
    $('body').toggleClass('menu-collapse');
})

// RUN ON WINDOW RESIZE
$(window).resize(function() {
  setMenu();
});

// SET PLUGIN
function setPlugin() {

    $('.select-control').each(function() {
        var select = $(this);

        select.selectpicker({
            style: 'select-control',
            width: '100%',
            iconBase: 'fa',
            tickIcon: 'fa-check',
        });
    });

    $('.date-control').each(function(){
        $(this).find('input').datepicker({
            todayHighlight: true,
            autoclose: true
        });
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.input-group').each(function(){
      var t = $(this),
          input = t.find('input');
      input.focus(function(){
        t.addClass('focused');
      }).blur(function(){
        t.removeClass('focused');
      });
    });

}setPlugin();


// FIELDS MULTIPLIER
$('.multiplier').each(function(){
  var t       = $(this),
      max     = t.data('max'),
      box     = t.find('.box-item'),
      item    = t.find('.item').eq(0),
      add     = t.find('.btn-add'),
      format;

  item.find('select').each(function(){
    $(this).selectpicker('destroy');
  });

  format = item.clone().hide();
  bind(item);

  function bind (obj) {
    setPlugin();
  }

  function reOrder(obj){
    var itm = obj.find('.item');
    itm.each(function(i){
      var tmp = i + 1;
      //re order name
      $(this).find('input').each(function(){
        if($(this).attr('name')){
          var name = $(this).attr('name').replace( /\[\d/g,'['+(i));
          $(this).attr('name',name);
        }
      });
      //Re order title
      $(this).find('.title').each(function(){
        var title = $(this).text();
        title = title.substring(0, title.indexOf(' '));
        $(this).text(title + ' ' + (i+1));
      })

    });

    //toggle delete button
    if(itm.length > 1){
      itm.closest('.multiplier').addClass('multiplied');
    }else{
      itm.closest('.multiplier').removeClass('multiplied');
    }
    //cek limit
    if(itm.length >= max){
      itm.closest('.multiplier').addClass('max');
    }else{
      itm.closest('.multiplier').removeClass('max');
    };
  };

  add.click(function(e){
    e.preventDefault();
    var html = format.clone();
    box.append(html);
    bind(html);
    html.slideDown(300);
    reOrder(box);
  });

  // DELETE
  $('body').on('click','.btn-del',function(e){
    e.preventDefault();
    var parent = $(this).closest('.item'),
        target = parent.closest('.multiplier');

    parent.slideUp(300, function(){
      parent.remove();
      reOrder(target);
    });
  });
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJtYWluLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIENFSyBERVZJQ0UgUkVTIFRPIFNFVCBNRU5VXHJcbmZ1bmN0aW9uIHNldE1lbnUoKXtcclxuICBpZiAoJCh3aW5kb3cpLndpZHRoKCkgPCA3NjcpIHtcclxuICAgICQoJ2JvZHknKS5hZGRDbGFzcygnbWVudS1jb2xsYXBzZScpO1xyXG4gIH1lbHNle1xyXG4gICAgJCgnYm9keScpLnJlbW92ZUNsYXNzKCdtZW51LWNvbGxhcHNlJyk7XHJcbiAgfVxyXG59c2V0TWVudSgpO1xyXG5cclxuLy8gVE9HR0xFIE1FTlUgRlVOQ1RJT05cclxuJCgnLm1lbnUtdG9nZ2xlJykuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICAkKCdib2R5JykudG9nZ2xlQ2xhc3MoJ21lbnUtY29sbGFwc2UnKTtcclxufSlcclxuXHJcbi8vIFJVTiBPTiBXSU5ET1cgUkVTSVpFXHJcbiQod2luZG93KS5yZXNpemUoZnVuY3Rpb24oKSB7XHJcbiAgc2V0TWVudSgpO1xyXG59KTtcclxuXHJcbi8vIFNFVCBQTFVHSU5cclxuZnVuY3Rpb24gc2V0UGx1Z2luKCkge1xyXG5cclxuICAgICQoJy5zZWxlY3QtY29udHJvbCcpLmVhY2goZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIHNlbGVjdCA9ICQodGhpcyk7XHJcblxyXG4gICAgICAgIHNlbGVjdC5zZWxlY3RwaWNrZXIoe1xyXG4gICAgICAgICAgICBzdHlsZTogJ3NlbGVjdC1jb250cm9sJyxcclxuICAgICAgICAgICAgd2lkdGg6ICcxMDAlJyxcclxuICAgICAgICAgICAgaWNvbkJhc2U6ICdmYScsXHJcbiAgICAgICAgICAgIHRpY2tJY29uOiAnZmEtY2hlY2snLFxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG4gICAgJCgnLmRhdGUtY29udHJvbCcpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICAkKHRoaXMpLmZpbmQoJ2lucHV0JykuZGF0ZXBpY2tlcih7XHJcbiAgICAgICAgICAgIHRvZGF5SGlnaGxpZ2h0OiB0cnVlLFxyXG4gICAgICAgICAgICBhdXRvY2xvc2U6IHRydWVcclxuICAgICAgICB9KTtcclxuICAgIH0pO1xyXG5cclxuICAgICQoJ1tkYXRhLXRvZ2dsZT1cInRvb2x0aXBcIl0nKS50b29sdGlwKCk7XHJcblxyXG4gICAgJCgnLmlucHV0LWdyb3VwJykuZWFjaChmdW5jdGlvbigpe1xyXG4gICAgICB2YXIgdCA9ICQodGhpcyksXHJcbiAgICAgICAgICBpbnB1dCA9IHQuZmluZCgnaW5wdXQnKTtcclxuICAgICAgaW5wdXQuZm9jdXMoZnVuY3Rpb24oKXtcclxuICAgICAgICB0LmFkZENsYXNzKCdmb2N1c2VkJyk7XHJcbiAgICAgIH0pLmJsdXIoZnVuY3Rpb24oKXtcclxuICAgICAgICB0LnJlbW92ZUNsYXNzKCdmb2N1c2VkJyk7XHJcbiAgICAgIH0pO1xyXG4gICAgfSk7XHJcblxyXG59c2V0UGx1Z2luKCk7XHJcblxyXG5cclxuLy8gRklFTERTIE1VTFRJUExJRVJcclxuJCgnLm11bHRpcGxpZXInKS5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgdmFyIHQgICAgICAgPSAkKHRoaXMpLFxyXG4gICAgICBtYXggICAgID0gdC5kYXRhKCdtYXgnKSxcclxuICAgICAgYm94ICAgICA9IHQuZmluZCgnLmJveC1pdGVtJyksXHJcbiAgICAgIGl0ZW0gICAgPSB0LmZpbmQoJy5pdGVtJykuZXEoMCksXHJcbiAgICAgIGFkZCAgICAgPSB0LmZpbmQoJy5idG4tYWRkJyksXHJcbiAgICAgIGZvcm1hdDtcclxuXHJcbiAgaXRlbS5maW5kKCdzZWxlY3QnKS5lYWNoKGZ1bmN0aW9uKCl7XHJcbiAgICAkKHRoaXMpLnNlbGVjdHBpY2tlcignZGVzdHJveScpO1xyXG4gIH0pO1xyXG5cclxuICBmb3JtYXQgPSBpdGVtLmNsb25lKCkuaGlkZSgpO1xyXG4gIGJpbmQoaXRlbSk7XHJcblxyXG4gIGZ1bmN0aW9uIGJpbmQgKG9iaikge1xyXG4gICAgc2V0UGx1Z2luKCk7XHJcbiAgfVxyXG5cclxuICBmdW5jdGlvbiByZU9yZGVyKG9iail7XHJcbiAgICB2YXIgaXRtID0gb2JqLmZpbmQoJy5pdGVtJyk7XHJcbiAgICBpdG0uZWFjaChmdW5jdGlvbihpKXtcclxuICAgICAgdmFyIHRtcCA9IGkgKyAxO1xyXG4gICAgICAvL3JlIG9yZGVyIG5hbWVcclxuICAgICAgJCh0aGlzKS5maW5kKCdpbnB1dCcpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICBpZigkKHRoaXMpLmF0dHIoJ25hbWUnKSl7XHJcbiAgICAgICAgICB2YXIgbmFtZSA9ICQodGhpcykuYXR0cignbmFtZScpLnJlcGxhY2UoIC9cXFtcXGQvZywnWycrKGkpKTtcclxuICAgICAgICAgICQodGhpcykuYXR0cignbmFtZScsbmFtZSk7XHJcbiAgICAgICAgfVxyXG4gICAgICB9KTtcclxuICAgICAgLy9SZSBvcmRlciB0aXRsZVxyXG4gICAgICAkKHRoaXMpLmZpbmQoJy50aXRsZScpLmVhY2goZnVuY3Rpb24oKXtcclxuICAgICAgICB2YXIgdGl0bGUgPSAkKHRoaXMpLnRleHQoKTtcclxuICAgICAgICB0aXRsZSA9IHRpdGxlLnN1YnN0cmluZygwLCB0aXRsZS5pbmRleE9mKCcgJykpO1xyXG4gICAgICAgICQodGhpcykudGV4dCgnRW1wbG95ZWUgJyArIChpKzEpKTtcclxuICAgICAgfSlcclxuXHJcbiAgICB9KTtcclxuXHJcbiAgICAvL3RvZ2dsZSBkZWxldGUgYnV0dG9uXHJcbiAgICBpZihpdG0ubGVuZ3RoID4gMSl7XHJcbiAgICAgIGl0bS5jbG9zZXN0KCcubXVsdGlwbGllcicpLmFkZENsYXNzKCdtdWx0aXBsaWVkJyk7XHJcbiAgICB9ZWxzZXtcclxuICAgICAgaXRtLmNsb3Nlc3QoJy5tdWx0aXBsaWVyJykucmVtb3ZlQ2xhc3MoJ211bHRpcGxpZWQnKTtcclxuICAgIH1cclxuICAgIC8vY2VrIGxpbWl0XHJcbiAgICBpZihpdG0ubGVuZ3RoID49IG1heCl7XHJcbiAgICAgIGl0bS5jbG9zZXN0KCcubXVsdGlwbGllcicpLmFkZENsYXNzKCdtYXgnKTtcclxuICAgIH1lbHNle1xyXG4gICAgICBpdG0uY2xvc2VzdCgnLm11bHRpcGxpZXInKS5yZW1vdmVDbGFzcygnbWF4Jyk7XHJcbiAgICB9O1xyXG4gIH07XHJcblxyXG4gIGFkZC5jbGljayhmdW5jdGlvbihlKXtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIHZhciBodG1sID0gZm9ybWF0LmNsb25lKCk7XHJcbiAgICBib3guYXBwZW5kKGh0bWwpO1xyXG4gICAgYmluZChodG1sKTtcclxuICAgIGh0bWwuc2xpZGVEb3duKDMwMCk7XHJcbiAgICByZU9yZGVyKGJveCk7XHJcbiAgfSk7XHJcblxyXG4gIC8vIERFTEVURVxyXG4gICQoJ2JvZHknKS5vbignY2xpY2snLCcuYnRuLWRlbCcsZnVuY3Rpb24oZSl7XHJcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICB2YXIgcGFyZW50ID0gJCh0aGlzKS5jbG9zZXN0KCcuaXRlbScpLFxyXG4gICAgICAgIHRhcmdldCA9IHBhcmVudC5jbG9zZXN0KCcubXVsdGlwbGllcicpO1xyXG5cclxuICAgIHBhcmVudC5zbGlkZVVwKDMwMCwgZnVuY3Rpb24oKXtcclxuICAgICAgcGFyZW50LnJlbW92ZSgpO1xyXG4gICAgICByZU9yZGVyKHRhcmdldCk7XHJcbiAgICB9KTtcclxuICB9KTtcclxufSk7Il0sImZpbGUiOiJtYWluLmpzIn0=

//# sourceMappingURL=main.js.map
