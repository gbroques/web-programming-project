var isUserNameValid = function(value) {
  var length = value.length;
  return length >= 6 && length <= 50;
}

var isPasswordValid = function(value) {
  var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,50}/;
  return value.match(regex);
};

var isPasswordConfirmValid = function(value) {
  return value === $( "#password" ).val();
}

var isFirstNameValid = function(value) {
  return value.length >= 1 && value.length <= 50;
}

var isLastNameValid = function(value) {
  return value.length >= 1 && value.length <= 50;
}

var isAddress1Valid = function(value) {
  return value.length >= 1 && value.length <= 100;
}

var isAddress2Valid = function(value) {
  return value.length <= 100;
}

var isCityValid = function(value) {
  return value.length >= 1 && value.length <= 50;
}

var isStateValid = function(value) {
  return value.length >= 1 && value.length <= 52;
}

var isZipCodeValid = function(value) {
  var isLengthValid = value.length >= 5 && value.length <= 10;
  var isFormatValid = value.match(/^\d{5}-\d{4}$/) !== null || value.match(/^\d{5}$/) !== null;
  return isLengthValid && isFormatValid;
}

var isPhoneValid = function(value) {
  var regex = /^\d{3}-\d{3}-\d{4}$/;
  return value.match(regex) && value.length <= 12;
};

var isEmailValid = function(value) {
  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return value.match(regex) && value.length <= 255;
};

var isDateOfBirthValid = function(value) {
  var regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
  return value.match(regex);
}

var fields = [
  { selector: '#userName', isValid: isUserNameValid },
  { selector: '#password', isValid: isPasswordValid },
  { selector: '#passwordConfirm', isValid: isPasswordConfirmValid },
  { selector: '#firstName', isValid: isFirstNameValid },
  { selector: '#lastName', isValid: isLastNameValid },
  { selector: '#address1', isValid: isAddress1Valid} ,
  { selector: '#address2', isValid: isAddress2Valid },
  { selector: '#city', isValid: isCityValid },
  { selector: '#state', isValid: isStateValid },
  { selector: '#zipCode', isValid: isZipCodeValid },
  { selector: '#phone', isValid: isPhoneValid },
  { selector: '#email', isValid: isEmailValid },
  { selector: '#dateOfBirth', isValid: isDateOfBirthValid }
];

var passwordConfirmDirty = false;

var addInvalidClasses = function(selector, hasFocus) {
  var glyphiconClass = hasFocus ? 'glyphicon-warning-sign' : 'glyphicon-remove';
  var parentClass = hasFocus ? 'has-warning' : 'has-error';

  var glyphicon = $(selector).siblings('.glyphicon');
  var parent = $(selector).parent().closest('div');

  if (hasFocus && glyphicon.hasClass('glyphicon-remove')) {
    glyphicon.removeClass('glyphicon-remove');
  }
  if (!hasFocus && glyphicon.hasClass('glyphicon-warning-sign')) {
    glyphicon.removeClass('glyphicon-warning-sign');
  }
  if (glyphicon.hasClass('glyphicon-ok')) {
    glyphicon.removeClass('glyphicon-ok');
  }
  if (hasFocus && parent.hasClass('has-error')) {
    parent.removeClass('has-error');
  }
  if (parent.hasClass('has-success')) {
    parent.removeClass('has-success');
  }
  glyphicon.addClass(glyphiconClass);
  parent.addClass(parentClass);
}

var addValidClasses = function(selector) {
  var glyphicon = $(selector).siblings('.glyphicon');
  var parent = $(selector).parent().closest('div');
  if (glyphicon.hasClass('glyphicon-remove')) {
    glyphicon.removeClass('glyphicon-remove');
  }
  if (glyphicon.hasClass('glyphicon-warning-sign')) {
    glyphicon.removeClass('glyphicon-warning-sign')
  }
  if (parent.hasClass('has-error')) {
    parent.removeClass('has-error');
  }
  if (parent.hasClass('has-warning')) {
    parent.removeClass('has-warning');
  }
  glyphicon.addClass('glyphicon-ok');
  parent.addClass('has-success');
}

var validateTextInput = function(selector, isValid) {
  $(selector).bind('input propertychange', function() {
    handleChange(selector, isValid);
  }).on('blur', function() {
    handleBlur(selector, isValid);
  });
}

var handleChange = function(selector, isValid) {
  if (!isValid($(selector).val())) {
    addInvalidClasses(selector, true)
  } else {
    addValidClasses(selector)
  }
};

// TODO: On Reset remove all has-error classes
var handleBlur = function(selector, isValid) {
  if (selector === '#passwordConfirm') {
    passwordConfirmDirty = true;
  }
  if (!isValid($(selector).val())) {
    addInvalidClasses(selector, false);
  } else {
    addValidClasses(selector)
  }
}

var preventNonNumericInput = function(selector) {
  $( selector ).keypress(function(e) {
    var keyCode = e.keyCode || e.which;
    if (!e.key.match(/\d/) && keyCode !== 8 && keyCode !== 9) {
      $(this).val($(this).val().replace(/[^0-9]-+/g, ''));
      return false;
    }
    return true;
  });
}

$(function() {
  fields.forEach(function(field) {
    validateTextInput(field.selector, field.isValid);
  });

  $('#dateOfBirth').datepicker({
    onSelect: function() {
      handleChange('#dateOfBirth', isDateOfBirthValid);
    }
  });

  // Prevent non-numeric inputs
  $( "#zipCode" ).keyup(function(e) {
    var keyCode = e.keyCode || e.which;
    if (!e.key.match(/\d/) && keyCode !== 8 && keyCode !== 9) {
      $(this).val($(this).val().replace(/[^0-9]-+/g, ''));
      return false;
    }
    return true;
  });

  // TODO: Handle adding hyphens on backspace, copy and paste, and holding a key down.
  $( "#phone" ).keyup(function() {
    var value = $(this).val();
    if (value.length === 10) {
      $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d{4})+$/, "$1-$2-$3"));
      handleChange(this, isPhoneValid);
      return true;
    }
    return true;
  });

  // TODO: Handle adding hyphens on backspace, copy and paste, and holding a key down.
  $( "#zipCode" ).keyup(function() {
    var value = $(this).val();
    if (value.length === 9) {
      $(this).val($(this).val().replace(/^(\d{5})(\d{4})+$/, "$1-$2"));
      handleChange(this, isZipCodeValid);
      return true;
    }
    return true;
  });

  preventNonNumericInput("#phone");
  preventNonNumericInput("#zipCode");

  $( "#password" ).keyup(function() {
    if (passwordConfirmDirty) {
      handleChange("#passwordConfirm", isPasswordConfirmValid);
    }
  });

  $( "#form" ).submit(function(e) {
    for (var i = 0; i < fields.length; i++) {
      var field = $( fields[i].selector );
      var isValid = fields[i].isValid;
      if (!isValid(field.val())) {
        break;
      }
    }
    if (i !== fields.length) {
      addInvalidClasses(fields[i].selector, true);
      field.focus();
      return false;
    }
    return true;
  });

  $( "#form" ).on("reset", function(e) {
    fields.forEach(function(field) {
      var glyphicon = $(field.selector).siblings('.glyphicon');
      var parent = $(field.selector).parent().closest('div');
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