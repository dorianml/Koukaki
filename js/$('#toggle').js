$("#toggle").click(function () {
  console.log('OPEN HAM')
  $(this).toggleClass("active");
  $("#overlay").toggleClass("open");
});

