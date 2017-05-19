var fields = [
  '#username',
  '#password',
  '#password-confirm',
  '#first-name',
  '#last-name',
  '#address-line-1',
  '#address-line-2',
  '#city',
  '#state',
  '#zip-code',
  '#phone-number',
  '#email',
  '#birthday'
];

$(function() {
  $('#home').on('click', function(e) {
    $('#form-container').css('display', 'none');
    $('#wizard-container').css('display', 'block');
    return true;
  });

  $('#register').on('click', function(e) {
    $('#wizard-container').css('display', 'none');
    $('#form-container').css('display', 'block');
    return true;
  });

  $('#home-mobile-link').on('click', function(e) {
    $('#form-container').css('display', 'none');
    $('#wizard-container').css('display', 'block');
    return true;
  });

  $('#register-mobile-link').on('click', function(e) {
    $('#wizard-container').css('display', 'none');
    $('#form-container').css('display', 'block');
    return true;
  });

  $( "#form" ).on("reset", function(e) {
    fields.forEach(function(field) {
      var glyphicon = $(field).siblings('.glyphicon');
      var parent = $(field).parent().closest('div');
      if (glyphicon.hasClass('glyphicon-remove')) {
        glyphicon.removeClass('glyphicon-remove');
      }
      if (glyphicon.hasClass('glyphicon-warning-sign')) {
        glyphicon.removeClass('glyphicon-warning-sign')
      }
      if (glyphicon.hasClass('glyphicon-ok')) {
        glyphicon.removeClass('glyphicon-ok')
      }
      if (parent.hasClass('has-error')) {
        parent.removeClass('has-error');
      }
      if (parent.hasClass('has-warning')) {
        parent.removeClass('has-warning');
      }
      if (parent.hasClass('has-success')) {
        parent.removeClass('has-success');
      }
    });
  });
});