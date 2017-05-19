<?php include('inc/header.php') ?>
    <!-- MAIN CONTENT -->
    <div class="row">
      <?php include('inc/menu.php') ?>
      <div id="wizard-container" class="col-md-8" style="<?php echo $_SERVER["REQUEST_METHOD"] === "GET" ? "display: block;" : "display: none"; ?>">
        <main style="display: flex">
          <svg id="wizard" xmlns="http://www.w3.org/2000/svg" height="610.394" width="436.71" viewBox="0 0 409.4284 572.25562"><g transform="translate(-137.194 -184.47)"><g fill="#212121"><g stroke-width="0"><rect rx="16.324" transform="scale(1 -1) rotate(51.347)" height="35.355" width="166.83" y="-542.86" x="-379.639"/><rect rx="16.801" transform="matrix(.97974 -.20025 -.25765 -.96624 0 0)" height="33.308" width="171.7" y="-578.12" x="202.63"/><rect rx="10.907" transform="matrix(-.0163 -.99987 -.99997 .00727 0 0)" height="35.354" width="111.46" y="-282.04" x="-758.7"/><rect rx="10.907" transform="matrix(-.0163 -.99987 -.99997 .00727 0 0)" height="35.354" width="111.46" y="-352.33" x="-759.13"/><path d="M281.706 645.383l-13.497.113c-6.023.05-10.88 5.59-10.695 12.418l.95 34.906c10.04.283 21.208.052 34.798.013l-.506-35.21c-.099-6.83-5.027-12.29-11.05-12.24zM352.001 645.293l-13.496.11c-6.024.05-10.793 5.592-10.695 12.426l.49 34.208c12.783-.546 24.535-1.256 35.216-2.08l-.465-32.42c-.099-6.834-5.027-12.294-11.05-12.244z" fill="#191919"/></g><circle cx="402.22" transform="matrix(0 1 1 0 0 0)" cy="306.43" r="88.885"/><path d="M306.402 311.094a89.142 94.061 0 0 0-88.316 82.167c19.358 1.677 43.253 3.21 72.916 4.421 43.048-1.24 76.874-2.943 103.689-4.76a89.142 94.061 0 0 0-88.29-81.828z" fill="#191919"/></g><path d="M252.71 496.6s1.545 39.491-.385 85.934c-15.005 49.59-30.333 60.189-69.979 88.314 26.295 9.965 44.95 12.799 122.62 12.255 101.01-2.077 146-13.628 146-13.628-54.422-26.214-69.355-52.091-81.54-86.277-2.511-38.593-7.3-92.075-7.3-92.075s29.913-13.152 52.579-39.72c0 0-33.058 9.937-56.796 16.89-24.24 3.76-44.408 7.093-82.754 3.589-29.373-6.55-68.151-18.794-68.151-18.794 22.154 24.536 33.18 28.765 45.707 43.512z" fill="#34495e" fill-rule="evenodd"/><path d="M280.44 253.07c0 31.574 3.006 19.821-5.297 42.775-5.731 13.089-14.184 19.211-44.464 37.77-26.373 18.558-52.355 26.352-52.355 26.352l-41.13 9.597s2.481 13.733 153.88 19.594c158.88-4.339 195.23-14.592 195.23-14.592s-63.778-12.946-101.67-43.256c-29.1-33.313-33.264-58.262-50.914-95.764-4.419-9.944-26.365-33.961-35.757-40.591-31.516-15.56-60.242-16.678-80.037 16.542-8.854 22.89-11.598 28.078 8.369 37.178-3.932-39.397 44.842-42.961 54.146 4.395z" fill="#2c3e50" fill-rule="evenodd"/><g stroke-width="0"><path d="M470.31 292.99s3.125 12.109 7.031 19.922c4.962 5.803 5.508 5.515 13.281 10.547l8.703 31.281 4.25 78.277-3.862 110.7c-.094 2.686 6.88 60.524 6.635 104.8-.267 48.408-.508 97.848 2.43 97.848h12.938c5.627 0 6.828-67.816 6.594-73.438l-6.36-152.67 3.257-58.477-4.2-109.68 5.303-28.879c9.277-4.47 13.861-8.95 15.04-11.289 1.562-3.906 5.273-18.75 5.273-18.75-19.913 27.481-59.43 25.427-76.312-.195z" fill="#795548"/><circle cx="508.02" cy="270.34" r="34.25" fill="#ff6e40"/><circle cy="270.34" cx="508.02" r="23.96" class="staff-orb" fill="#ff9100"/><circle cy="270.34" cx="508.02" r="15.947" class="staff-orb" fill="#ffc107"/><circle cx="508.02" cy="270.34" r="7.108" class="staff-orb" fill="#ffd54f"/></g><path d="M295.17 424.85l-40.147-17.28s-5.825 25.739 15.91 28.927c20.017 2.493 24.237-11.648 24.237-11.648z" class="wizard-eye" fill="#ffee58" fill-rule="evenodd"/><circle cx="419.15" transform="matrix(0 1 1 0 0 0)" cy="274.13" r="5.882" fill="#212121"/><g stroke-width="0"><path d="M252.71 496.6s1.545 39.491-.385 85.934c-15.005 49.59-30.333 60.189-69.979 88.314 26.295 9.965 44.95 12.799 122.62 12.255 101.01-2.077 146-13.628 146-13.628-54.422-26.214-69.355-52.091-81.54-86.277-2.511-38.593-7.3-92.075-7.3-92.075s29.913-13.152 52.579-39.72c0 0-33.058 9.937-56.796 16.89-24.24 3.76-44.408 7.093-82.754 3.589-29.373-6.55-68.151-18.794-68.151-18.794 22.154 24.536 33.18 28.765 45.707 43.512z" fill="#2c3e50" fill-rule="evenodd"/><path d="M415.64 451.49s-33.059 9.938-56.797 16.891c-16.983 2.635-31.988 5.05-52.625 5.06v209.74c100.78-2.094 145.68-13.62 145.68-13.62-54.422-26.214-69.355-52.091-81.541-86.277-2.51-38.593-7.299-92.074-7.299-92.074s29.912-13.153 52.578-39.721zM306.173 202.372l2.321 186.168c151.19-4.473 176.706-13.97 176.706-13.97s-63.778-12.987-101.67-43.298c-29.101-33.313-33.264-58.262-50.914-95.764-4.116-9.262-16.146-25.117-26.365-33.375z" fill="#34495e"/></g><g stroke-width="0"><path d="M252.71 496.6s1.545 39.491-.385 85.934c-15.005 49.59-30.333 60.189-69.979 88.314 26.295 9.965 44.95 12.799 122.62 12.255 101.01-2.077 146-13.628 146-13.628-54.422-26.214-69.355-52.091-81.54-86.277-2.511-38.593-7.3-92.075-7.3-92.075s29.913-13.152 52.579-39.72c0 0-33.058 9.937-56.796 16.89-24.24 3.76-44.408 7.093-82.754 3.589-29.373-6.55-68.151-18.794-68.151-18.794 22.154 24.536 33.18 28.765 45.707 43.512z" fill="#2c3e50" fill-rule="evenodd"/><path d="M415.64 451.49s-33.059 9.938-56.797 16.891c-16.983 2.635-31.988 5.05-52.625 5.06v209.74c100.78-2.094 145.68-13.62 145.68-13.62-54.422-26.214-69.355-52.091-81.541-86.277-2.51-38.593-7.299-92.074-7.299-92.074s29.912-13.153 52.578-39.721zM305.773 201.972l.24 186.688c151.19-4.473 179.187-14.09 179.187-14.09s-63.778-12.947-101.67-43.258c-29.101-33.313-33.264-58.262-50.914-95.764-4.116-9.262-16.546-25.437-26.765-33.695z" fill="#34495e"/></g><path d="M316.316 424.85l40.147-17.28s5.825 25.739-15.91 28.927c-20.017 2.493-24.237-11.648-24.237-11.648z" class="wizard-eye" fill="#ffee58" fill-rule="evenodd"/><circle r="5.882" cy="-337.355" transform="rotate(90)" cx="419.15" fill="#212121"/></g>
          </svg>
        </main>
      </div>
      <div id="form-container" class="col-md-8" style="<?php echo $_SERVER["REQUEST_METHOD"] === "POST" ? "display: block;" : "display: none"; ?>">
        <svg class="scroll scroll-top" xmlns="http://www.w3.org/2000/svg" width="368.673" height="38.549" viewBox="0 0 345.63086 36.139471"><path d="M11.816.028C5.291.028 0 8.106 0 18.073 0 28.04 5.29 36.12 11.816 36.118c48.93-.814 102.154-2.708 150.72-2.977 65.941-.102 165.308 2.998 165.308 2.998v-.023c16.94-.023 17.786-8.094 17.787-18.043 0-9.966-2.186-18.632-17.815-18.045-55.157 1.159-110.347 4.79-165.402 4.15-52.49-.842-105.688-2.372-150.598-4.15z" fill="#ffe082"/></svg>
        <main class="scroll-container">
          <form id="form" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="row">
              <?php if (isset($invalidFields["userName"])): ?>
                <div class="col-xs-12 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 form-group has-feedback">
              <?php endif; ?>
                <label for="userName">User Name</label>
                <input
                  type="userName"
                  class="form-control"
                  id="userName"
                  name="userName"
                  placeholder="Enter User Name"
                  minlength="6"
                  maxlength="50"
                  required="true"
                  <?php if (isset($fields["userName"])): ?>
                    value="<?= $fields["userName"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["userName"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["userName"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row">
              <?php if (isset($invalidFields["password"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Password"
                  minlength="8"
                  maxlength="50"
                  aria-describedby="helpBlock"
                  required="true"
                  <?php if (isset($fields["password"])): ?>
                    value="<?= $fields["password"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["password"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["password"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                  <span id="helpBlock" class="help-block">Please include a capital and lowercase letter, digit, and special character. (8 - 50 characters)</span>
                <?php endif; ?>
              </div>
              <?php if (isset($invalidFields["passwordConfirm"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="passwordConfirm">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="passwordConfirm"
                  name="passwordConfirm"
                  placeholder="Confirm Password"
                  minlength="8"
                  maxlength="50"
                  required="true"
                  <?php if (isset($fields["passwordConfirm"])): ?>
                    value="<?= $fields["passwordConfirm"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["passwordConfirm"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["passwordConfirm"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row">
              <?php if (isset($invalidFields["firstName"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="First Name"
                  maxlength="50"
                  required="true"
                  <?php if (isset($fields["firstName"])): ?>
                    value="<?= $fields["firstName"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["firstName"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["firstName"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
              <?php if (isset($invalidFields["lastName"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                  placeholder="Last Name"
                  maxlength="50"
                  required="true"
                  <?php if (isset($fields["lastName"])): ?>
                    value="<?= $fields["lastName"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["lastName"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["lastName"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row">
              <?php if (isset($invalidFields["address1"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="address1">Address Line 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="address1"
                  name="address1"
                  placeholder="Address Line 1"
                  maxlength="100"
                  required="true"
                  <?php if (isset($fields["address1"])): ?>
                    value="<?= $fields["address1"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["address1"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["address1"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
              <?php if (isset($invalidFields["address2"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="address2">Address Line 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="address2"
                  name="address2"
                  placeholder="Address Line 2"
                  maxlength="100"
                  <?php if (isset($fields["address2"])): ?>
                    value="<?= $fields["address2"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["address2"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["address2"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row">
              <?php if (isset($invalidFields["city"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="city">City</label>
                <input
                  type="text"
                  class="form-control"
                  id="city"
                  name="city"
                  placeholder="City"
                  maxlength="50"
                  required="true"
                  <?php if (isset($fields["city"])): ?>
                    value="<?= $fields["city"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["city"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["city"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
              <?php if (isset($invalidFields["state"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="state">State</label>
                <select
                  id="state"
                  name="state"
                  class="form-control"
                  <?php if ($isFormValid && $_SERVER["REQUEST_METHOD"] === "POST"): ?>
                    disabled="true"
                  <?php endif; ?>
                >
                  <?php
                    foreach ($states as $state) {
                      echo '<option value="' . $state['value'] . '"';
                      if (isset($fields["state"]) && $fields["state"] === $state["value"]) {
                        echo "selected";
                      }
                      echo " >" . $state['name'] . "</option>";
                    }
                  ?>
                </select>
                <?php if (isset($invalidFields["state"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["state"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>  
            </div>

            <div class="row">
              <?php if (isset($invalidFields["zipCode"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="zipCode">Zip Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="zipCode"
                  name="zipCode"
                  placeholder="Zip Code"
                  maxlength="10"
                  minlength="5"
                  required="true"
                  <?php if (isset($fields["zipCode"])): ?>
                    value="<?= $fields["zipCode"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["zipCode"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["zipCode"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
              <?php if (isset($invalidFields["phone"])): ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 col-lg-6 form-group has-feedback">
              <?php endif; ?>
                <label for="phone">Phone Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  name="phone"
                  placeholder="###-###-####"
                  maxlength="12"
                  required="true"
                  <?php if (isset($fields["phone"])): ?>
                    value="<?= $fields["phone"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["phone"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["phone"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row">
              <?php if (isset($invalidFields["email"])): ?>
                <div class="col-xs-12 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 form-group has-feedback">
              <?php endif; ?>
                <label for="email">Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                  maxlength="255" 
                  required="true"
                  <?php if (isset($fields["email"])): ?>
                    value="<?= $fields["email"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["email"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["email"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
            </div>

            <fieldset class="form-group">
              <legend>Gender</legend>
              <?php
                $count = 0;
                foreach ($genders as $gender) {
                  echo '<div class="form-check">';
                  echo '<label class="form-check-label">';
                  echo '<input ';
                  echo 'type="radio" ';
                  echo 'class="form-check-input" ';
                  echo 'name="gender" ';
                  echo 'required="true" ';
                  if ($isFormValid && $_SERVER["REQUEST_METHOD"] === "POST") {
                    echo 'disabled="true" ';
                  }
                  echo 'id="' . $gender["value"] . '" ';
                  echo 'value="' . $gender["value"] . '" ';
                  if (isset($fields["gender"]) && $fields["gender"] === $gender["value"] || $count === 0) {
                    echo 'checked="true" ';
                  }
                  echo "/> ";
                  echo $gender["name"];
                  echo '</label>';
                  echo '</div>';
                  $count++;
                }
              ?>
            </fieldset>
            <fieldset class="form-group">
              <legend>Marital Status</legend>
              <?php
                $count = 0;
                foreach ($maritalStatuses as $maritalStatus) {
                  echo '<div class="form-check">';
                  echo '<label class="form-check-label">';
                  echo '<input ';
                  echo 'type="radio" ';
                  echo 'class="form-check-input" ';
                  echo 'name="maritalStatus" ';
                  echo 'required="true" ';
                  if ($isFormValid && $_SERVER["REQUEST_METHOD"] === "POST") {
                    echo 'disabled="true" ';
                  }
                  echo 'id="' . $maritalStatus["value"] . '" ';
                  echo 'value="' . $maritalStatus["value"] . '" ';
                  if (isset($fields["maritalStatus"]) && $fields["maritalStatus"] === $maritalStatus["value"] || $count === 0) {
                    echo 'checked="true" ';
                  }
                  echo "/> ";
                  echo $maritalStatus["name"];
                  echo '</label>';
                  echo '</div>';
                  $count++;
                }
              ?>
            </fieldset>

            <div class="row">
              <?php if (isset($invalidFields["dateOfBirth"])): ?>
                <div class="col-xs-12 form-group has-feedback has-error">
              <?php else: ?>
                <div class="col-xs-12 form-group has-feedback">
              <?php endif; ?>
                <label for="zipCode">Birthday</label>
                <input
                  type="text"
                  class="form-control"
                  id="dateOfBirth"
                  name="dateOfBirth"
                  required="true"
                  placeholder="MM/dd/yyyy"
                  <?php if (isset($fields["dateOfBirth"])): ?>
                    value="<?= $fields["dateOfBirth"] ?>"
                  <?php endif; ?>
                >
                <?php if (isset($invalidFields["dateOfBirth"])): ?>
                  <span class="glyphicon form-control-feedback glyphicon-remove"></span>
                  <span class="help-block"><?= $errorMessages["dateOfBirth"] ?></span>
                <?php else: ?>
                  <span class="glyphicon form-control-feedback"></span>
                <?php endif; ?>
              </div>
            </div>

            <div class="row" style="margin-top: 20px">
              <div class="col-xs-12 col-md-6">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <div class="col-xs-12 col-md-6">
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </div>
          </form>
        </main>
        <svg class="scroll scroll-bottom" xmlns="http://www.w3.org/2000/svg" width="368.673" height="38.549" viewBox="0 0 345.63086 36.139471"><path d="M11.816.028C5.291.028 0 8.106 0 18.073 0 28.04 5.29 36.12 11.816 36.118c48.93-.814 102.154-2.708 150.72-2.977 65.941-.102 165.308 2.998 165.308 2.998v-.023c16.94-.023 17.786-8.094 17.787-18.043 0-9.966-2.186-18.632-17.815-18.045-55.157 1.159-110.347 4.79-165.402 4.15-52.49-.842-105.688-2.372-150.598-4.15z" fill="#ffe082"/></svg>
      </div>
    </div>
  </div>

<?php include('inc/footer.php') ?>
