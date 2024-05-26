'use strict';

// IMAGE HANDLER START
$("form").on("change", ".file-upload-field", function () {
  $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
});

function proPicURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var preview = $(input).parents('.thumb').find('.profilePicPreview');
      $(preview).css('background-image', `url('${e.target.result}')`);
      $(preview).addClass('has-image');
      $(preview).hide();
      $(preview).fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$('.profilePicUpload').on('change', function () {  
  proPicURL(this);
});

$('.remove-image').on('click', function () {
  var tempImage = $(this).data('img');
  $(this).parents('.profilePicPreview').css('background-image', `url('${tempImage}')`);
  $(this).parents(".profilePicPreview").removeClass('has-image');
  $(this).parents(".thumb").find('input[type=file]').val('');
});
// IMAGE HANDLER END

// TABLE SEARCH
$('.custom-data-table').closest('.card').find('.card-body').attr('style', 'padding-top:0px');
var tr_elements = $('.custom-data-table tbody tr');
$(document).on('input', 'input[name=search_table]', function () {
  var search = $(this).val().toUpperCase();
  var match = tr_elements.filter(function (idx, elem) {
    return $(elem).text().trim().toUpperCase().indexOf(search) >= 0 ? elem : null;
  }).sort();
  var table_content = $('.custom-data-table tbody');
  if (match.length == 0) {
    table_content.html('<tr><td colspan="100%" class="text-center">Data Not Found</td></tr>');
  } else {
    table_content.html(match);
  }
});
// TABLE SEARCH