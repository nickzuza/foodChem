'use strict';
if(document.getElementById('prodList')){
    $('.filter').change(function(e){console.log('changed :'+$(e.currentTarget).attr('id'));});
}