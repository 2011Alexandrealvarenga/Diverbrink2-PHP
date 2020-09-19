
(function() {

  var navLinks = $('nav ul li a navbar navbar-expand-lg'),
      navH = $('nav navbar navbar-expand-lg').height(),
      section = $('section'),
      documentEl = $(document);
  
  documentEl.on('scroll', function() {
      var currentScrollPos = documentEl.scrollTop();
      
      section.each(function() {
          var self = $(this);
          if ( self.offset().top < (currentScrollPos + navH) && (currentScrollPos + navH) < (self.offset().top + self.outerHeight()) ) {
              var targetClass = '.' + self.attr('class') + '-marker';
              navLinks.removeClass('active');
              $(targetClass).addClass('active');
          }
      });
      
  });
          
})();

