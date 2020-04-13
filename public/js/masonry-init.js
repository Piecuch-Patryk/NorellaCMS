$('#container').imagesLoaded( {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
  },
  function() {
    $('.grid').masonry();
  }
);