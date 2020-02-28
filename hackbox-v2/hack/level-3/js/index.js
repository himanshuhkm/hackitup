$('.txt').html(function(i, html) {
  var chars = $.trim(html).split("");

  return '<span>' + chars.join('</span><span>') + '</span>';
});
fetch('https://hackitup-level.herokuapp.com/number').then(res => {
    console.log('esketit')
})