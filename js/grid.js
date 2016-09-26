var Grid = {

    init : function() {
    this.alignement();
    },

    alignement : function() {
    var elem = document.querySelectorAll('.grid');
    var msnry = new Masonry( elem, {
           itemSelector: '.grid-item'
       });
    }
};