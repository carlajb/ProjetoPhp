$(document).ready(function () {
  $('.more').click(function () {
    var acao = $(this).data('acao');

    $.ajax({
      url: 'DataRequest.php',
      type: 'post',
      data: {
        acao: acao,
      },
      success: function (result) {
        // console.log(result);
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });
});
