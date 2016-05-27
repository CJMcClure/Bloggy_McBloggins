var opt = document.getElementsByTagName('a');

opt[0].addEventListener('mouseover', function(){

  this.style.cursor = 'pointer';

});

opt[1].addEventListener('click', function(){

  alert('Edit Post!');

});

opt[2].addEventListener('click', function(){

  alert('Delete Post!');

});

opt[3].addEventListener('click', function(){



});
