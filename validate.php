<?php

DB::connect();
Session::start();

$user = new \stdClass;

$states = [
  ["value" => "AL", "name" => "Alabama"],
  ["value" => "AK", "name" => "Alaska"],
  ["value" => "AZ", "name" => "Arizona"],
  ["value" => "AR", "name" => "Arkansas"],
  ["value" => "CA", "name" => "California"],
  ["value" => "CO", "name" => "Colorado"],
  ["value" => "CT", "name" => "Connecticut"],
  ["value" => "DE", "name" => "Delaware"],
  ["value" => "DC", "name" => "District of Columbia"],
  ["value" => "FL", "name" => "Florida"],
  ["value" => "GA", "name" => "Georgia"],
  ["value" => "HI", "name" => "Hawaii"],
  ["value" => "ID", "name" => "Idaho"],
  ["value" => "IL", "name" => "Illinois"],
  ["value" => "IN", "name" => "Indiana"],
  ["value" => "IA", "name" => "Iowa"],
  ["value" => "KS", "name" => "Kansas"],
  ["value" => "KY", "name" => "Kentucky"],
  ["value" => "LA", "name" => "Louisiana"],
  ["value" => "ME", "name" => "Maine"],
  ["value" => "MD", "name" => "Maryland"],
  ["value" => "MA", "name" => "Massachusetts"],
  ["value" => "MI", "name" => "Michigan"],
  ["value" => "MN", "name" => "Minnesota"],
  ["value" => "MS", "name" => "Mississippi"],
  ["value" => "MO", "name" => "Missouri"],
  ["value" => "MT", "name" => "Montana"],
  ["value" => "NE", "name" => "Nebraska"],
  ["value" => "NV", "name" => "Nevada"],
  ["value" => "NH", "name" => "New Hampshire"],
  ["value" => "NJ", "name" => "New Jersey"],
  ["value" => "NM", "name" => "New Mexico"],
  ["value" => "NY", "name" => "New York"],
  ["value" => "NC", "name" => "North Carolina"],
  ["value" => "ND", "name" => "North Dakota"],
  ["value" => "OH", "name" => "Ohio"],
  ["value" => "OK", "name" => "Oklahoma"],
  ["value" => "OR", "name" => "Oregon"],
  ["value" => "PA", "name" => "Pennsylvania"],
  ["value" => "RI", "name" => "Rhode Island"],
  ["value" => "SC", "name" => "South Carolina"],
  ["value" => "SD", "name" => "South Dakota"],
  ["value" => "TN", "name" => "Tennessee"],
  ["value" => "TX", "name" => "Texas"],
  ["value" => "UT", "name" => "Utah"],
  ["value" => "VT", "name" => "Vermont"],
  ["value" => "VA", "name" => "Virginia"],
  ["value" => "WA", "name" => "Washington"],
  ["value" => "WV", "name" => "West Virginia"],
  ["value" => "WI", "name" => "Wisconsin"],
  ["value" => "WY", "name" => "Wyoming"]
];

$genders = [
  ["name" => "Male", "value" => "male"],
  ["name" => "Female", "value" => "female"]
];

$maritalStatuses = [
  ["name" => "Married", "value" => "married"],
  ["name" => "Single", "value" => "single"],
  ["name" => "Divorced", "value" => "divorced"],
  ["name" => "Widowed", "value" => "widowed"]
];

$fields = [];
$invalidFields = [];
$errorMessages = [
  "userName" => "Must be 6 - 50 characters.",
  "password" => "Must contain a capital letter, lowercase letter, digit, and special character. Must be 8 - 50 characters.",
  "passwordConfirm" => "Must match password.",
  "firstName" => "Max length of 50 characters.",
  "lastName" => "Max length of 50 characters.",
  "address1" => "Max length of 100 characters.",
  "address2" => "Max length of 100 characters.",
  "city" => "Max length of 50 characters",
  "state" => "Max length of 52 characters",
  "zipCode" => "Must be 5 - 10 characters. xxxxx or xxxxx-xxxx format.",
  "phone" => "Max length of 12 characters. xxx-xxx-xxxx format.",
  "email" => "Max length of 255 characters. Must be valid email.",
  "gender" => "Max length of 50 characters",
  "maritalStatus" => "Max length of 50 characters.",
  "dateOfBirth" => "Must be MM/dd/yyyy format."
];

function snakeToCamel($string) {
  return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string)));
};

$isFormValid = true;

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  foreach ($_POST as $field => $value) {
    $fields[$field] = $value;
  }

  function isUsernameValid($value) {
    $len = strlen($value);
    return $len >= 6 && $len <= 50;
  };

  function isPasswordValid($value) {
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,50}/';
    return preg_match($regex, $value);
  };

  function isPasswordConfirmValid($value) {
    return $value === $_POST["password"];
  };

  function isFirstNameValid($value) {
    $len = strlen($value);
    return $len >= 1 && $len <= 50;
  };

  function isLastNameValid($value) {
    $len = strlen($value);
    return $len >= 1 && $len <= 50;
  };

  function isAddress1Valid($value) {
    $len = strlen($value);
    return $len >= 1 && $len <= 100;
  };

  function isAddress2Valid($value) {
    $len = strlen($value);
    return $len <= 100;
  };

  function isCityValid($value) {
    $len = strlen($value);
    return $len >= 1 && $len <= 50;
  };

  function isStateValid($value) {
    $len = strlen($value);
    return $len >= 1 && $len <= 52;
  };

  function isZipCodeValid($value) {
    $len = strlen($value);
    $isLengthValid = $len >= 5 && $len <= 10;
    $isFormatValid = preg_match('/^\d{5}-\d{4}$/', $value) || preg_match('/^\d{5}$/', $value);
    return $isLengthValid && $isFormatValid;
  };

  function isPhoneValid($value) {
    $regex = '/^\d{3}-\d{3}-\d{4}$/';
    return preg_match($regex, $value) && strlen($value) <= 12;
  };

  function isEmailValid($value) {
    $regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    return preg_match($regex, $value) && strlen($value) <= 255;
  };

  function isGenderValid($value) {
    return strlen($value) <= 50;
  }

  function isMaritalStatusValid($value) {
    return strlen($value) <= 50;
  }

  function isDateOfBirthValid($value) {
    $regex = '/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/';
    return preg_match($regex, $value);
  };

  foreach ($_POST as $field => $value) {
    $isFieldValid = 'is' . ucfirst(snakeToCamel($field)) . 'Valid';
    if (!$isFieldValid($value)) {
      $invalidFields[$field] = $value;
      $isFormValid = false;
    }
  }

  if ($isFormValid) {
    $user = User::create($fields);
    Session::set('user', $user);
    header('Location: http://localhost/Project3/confirmation.php');
  }
}