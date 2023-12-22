<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Sweesi Ltd</title>
</head>
<body>
    <header>
        <h1>Sweesi LTD</h1>
        <nav>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="hero">
            <div>
                <h1>UK International Students:</h1>
                <p>Whether you're looking to sharpen <span>English Language skills</span>, develop <span>academic practices</span>, or navigate <span>UK education opportunities</span>, we're here to make your journey seamless and successful.</p>
                <button>
                    <a href="#call-to-action"><strong>Submit a Request</strong></a>
                </button>
            </div>
            <img src="images/graduation-cap-throwing.webp" alt="scenic silhouette of students throwing graduation caps">
        </section>
        <section id="projects">
            <h1>Some random information</h1>
            <div class="panel-list">
                <div class="panel">
                    <div></div>
                    <p>this is some subtext under an illustration or image</p>
                </div>
                <div class="panel">
                    <div></div>
                    <p>this is some subtext under an illustration or image</p>
                </div>
                <div class="panel">
                    <div></div>
                    <p>this is some subtext under an illustration or image</p>
                </div>
                <div class="panel">
                    <div></div>
                    <p>this is some subtext under an illustration or image</p>
                </div>
            </div>
            
        </section>
        <!-- <section id="quotes">
            <blockquote><em>“A good programmer is someone who always looks both ways before crossing a one-way street.”</em></blockquote>
            <p> - Doug Linder, a computer scientist</p>
        </section> -->
        <section id="call-to-action">
            <div>
              <div>
                  <h3>Request Submission</h3>
                  <p>Fill in your details and we will contact you within the next 4-5 working days</p>
                  <p>Required fields are marked by <strong>*</strong></p>
              </div>
                
              <form method="post">
                <fieldset id="info">
                  <label for="full-name">
                    <p>Full Name <strong>*</strong></p>
                    <input name="full-name" id="full-name" required>
                  </label>
                  <label for="email">
                    <p>E-mail address <strong>*</strong></p>
                    <input name="email" type="email" id="email" required>
                  </label>
                  <label for="mobile-number">
                    <p>Mobile number (+44)</p>
                    <input name="mobile-number" type="tel" id="mobile-number">
                  </label>
                  <label for="education-level">
                    <p>Highest level of education (enter details below) <strong>*</strong></p>
                    <select name="education-level" id="education-level" required>
                      <option value="primary">Primary education</option>
                      <option value="secondary">Secondary education</option>
                      <option value="bachelors">Bachelors or equivalent</option>
                      <option value="masters">Masters or equivalent</option>
                      <option value="doctorate">Doctorate or equivalent</option>
                    </select>
                  </label>
                  <label for="nationality">
                    <p>Nationality <strong>*</strong></p>
                    <select name="nationality" id="nationality" required>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Åland Islands">Åland Islands</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote D'ivoire">Cote D'ivoire</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="French Southern Territories">French Southern Territories</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guadeloupe">Guadeloupe</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guernsey">Guernsey</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea-bissau">Guinea-bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Isle of Man">Isle of Man</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jersey">Jersey</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option value="Korea, Republic of">Korea, Republic of</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macao">Macao</option>
                      <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option value="Moldova, Republic of">Moldova, Republic of</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montenegro">Montenegro</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Pitcairn">Pitcairn</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russian Federation">Russian Federation</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Saint Helena">Saint Helena</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia">Saint Lucia</option>
                      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Serbia">Serbia</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Timor-leste">Timor-leste</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Viet Nam">Viet Nam</option>
                      <option value="Virgin Islands, British">Virgin Islands, British</option>
                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                      <option value="Western Sahara">Western Sahara</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                  </label>
                  <label for="residence-status">
                    <p>UK residence status <strong>*</strong></p>
                    <select name="residence-status" id="residence-status" required>
                      <option value="optiona">Option A</option>
                      <option value="optionb">Option B</option>
                      <option value="optionc">Option C</option>
                    </select>
                  </label>
                </fieldset>
                <hr>
                <fieldset id="service-type" name="service-type">
                  <p>Which service are you interested in?</p>
                  <ul>
                    <label for="university-education">
                      <input type="checkbox" name="service" id="university-education" value="university-education">
                      <p> University Education</p>
                    </label><br>
                    <label for="learning-english">
                      <input type="checkbox" name="service" id="learning-english" value="learning-english">
                      <p> Learning English</p>
                    </label><br>
                    <label for="skills-development">
                      <input type="checkbox" name="service" id="skills-development" value="skills-development">
                      <p> Skills Development</p>
                    </label><br>
                    <label for="communities-near-me">
                      <input type="checkbox" name="service" id="communities-near-me" value="communities-near-me">
                      <p> Find communities near me</p>
                    </label><br>
                  </ul>
                </fieldset>
                <hr>
                <label id="lbl-details">
                  <p>Please include any relevant details</p>
                  <textarea></textarea>
                </label>
                <input type="submit" value="Send Request" onsubmit="return false">
              </form>
              <?php
                print_r($_POST)
              ?>
            </div>
        </section>
    </main>
    <footer>
        Copyright &copy; Sweesi Ltd 2023      
    </footer>
</body>
</html>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/general.css">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@700&family=DM+Serif+Text&family=Playfair+Display&family=Roboto&family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <h1>SWEESI LTD</h1>
      <p>The gateway to fulfilling your academic goals</p>
    </div>
    <nav>
      <ul>
        <li class="home">HOME</li>
        <li class="study-in-uk">
          STUDY IN UK
          <div class="dropdown-options">
            <a href="" >
              <p>All Courses</p>
            </a>
            <hr class="small"></hr>
            <a href="https://www.google.co.uk/" target="_blank">
              <p>Postgraduate</p>
            </a>
            <hr class="small"></hr>
            <a href="">
              <p>Undergraduate</p>
            </a>
          </div>
        </li>
        <li>ENGLISH</li>
        <li>TRAINING</li>
        <li>SEARCH</li>
        <li class="language" style="color: #0066CC; text-decoration: underline;">EN</li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <div class="left-decoration"></div>
      <div class="hero-text">
        <h1>UK International Students:</h1>
        <p>Whether you're looking to sharpen <span>English Language skills</span>, develop <span>academic practices</span>, or navigate <span>UK education opportunities</span>, we're here to make your journey seamless and successful.</p>
        <div class="get-in-touch">
          <p>Get In Touch</p>
          <ion-icon name="caret-down-circle-outline"></ion-icon>
        </div>
      </div>
      <div>
        <div class="hero-image-shadow"></div>
        <img src="hero-image.webp" class="hero-image">
      </div>
    </section>
    <section class="our-services">
      <h1>Our Services</h1>
      <hr></hr>
      <div class="panels">
        <div class="university panel">
          <div class="panel-top"><h2 class="panel-title">University educated</h2></div>
          <div class="panel-bottom"><p class="panel-text">Enrol in undergraduate / postgraduate courses</p></div>
        </div>
        <div class="english panel">
          <div class="panel-top"><h2 class="panel-title">Learn English</h2></div>
          <div class="panel-bottom"><p class="panel-text">Further your reading, writing and oral English proficiency</p></div>
        </div>
        <div class="skills panel">
          <div class="panel-top"><h2 class="panel-title">Develop yourself</h2></div>
          <div class="panel-bottom"><p class="panel-text">Enhance your skill-set and elevate your career prospects</p></div>
        </div>
        <div class="community panel">
          <div class="panel-top"><h2 class="panel-title">Join the community</h2></div>
          <div class="panel-bottom"><p class="panel-text">Integrate into tight-knit communities in the UK</p></div>
        </div>
      </div>
    </section>
    <section class="submit-request">
      <h2>Submit a request</h2>
      <h3>Fill in your details and we will contact you within 4-5 working days</h3>
      <p>Required fields are marked by <strong>*</strong></p>
      <form method="post" action="mailto:abdullahsweesi11@gmail.com">
        <label for="full-name">
          Full Name <strong>*</strong><br>
          <input name="full-name" id="full-name" required>
        </label>
        <label for="education-level">
          Highest level of education <strong>*</strong><br>
          <select name="education-level" id="education-level" required></select>
        </label>
        <label for="email">
          E-mail address <strong>*</strong><br>
          <input name="email" type="email" id="email" required>
        </label>
        <label for="mobile-number">
          Mobile number (+44)<br>
          <input name="mobile-number" type="tel" id="mobile-number">
        </label>
        <label for="nationality">
          Nationality <strong>*</strong><br>
          <select name="nationality" id="nationality" required></select>
        </label>
        <label for="residence-status">
          UK residence status <strong>*</strong><br>
          <select name="residence-status" id="residence-status" required></select>
        </label>
        <fieldset id="service-type" name="service-type">
          Which service are you interested in?<br>
          <label for="university-education">University Education
          <input type="checkbox" name="service" id="university-education" value="university-education"></label><br>
          <input type="checkbox" name="service" id="learning-english" value="learning-english">
          <label for="learning-english">Learning English</label><br>
          <input type="checkbox" name="service" id="skills-development" value="skills-development">
          <label for="skills-development">Skills Development</label><br>
          <input type="checkbox" name="service" id="communities-near-me" value="communities-near-me">
          <label for="communities-near-me">Find communities in near me</label><br>
        </fieldset>
        <label>Please include any relevant details
          <textarea cols="50" rows="10"></textarea>
        </label>
        <input type="submit" value="Send Request">
      </form>
    </section>
  </main>
  <footer></footer>
</body>
</html> -->

