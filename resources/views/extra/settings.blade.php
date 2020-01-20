@extends('layout.master')
@section('parentPageTitle', 'Extra')
@section('title', 'Settings')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs mb-2">
                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Company_Settings">Company</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Localization">Localization</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions">Roles & Permissions</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Email_Settings">Email</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Invoice_Settings">Invoice</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Notifications">Notifications </a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Change_Password">Change Password </a></li>
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane active show" id="Company_Settings">
                    <div class="card text-white bg-info">
                        <div class="card-header">Company Settings</div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Company Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input class="form-control" value="Louis Pierce" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Mobile Number <span class="text-danger">*</span></label>
                                            <input class="form-control" value="+1 882-635-7531" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" placeholder="44 Shirley Ave. West Chicago, IL 60185" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelope"></i></span>
                                                </div>
                                                <input type="text" class="form-control" value="LouisPierce@example.com" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Website Url</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-globe"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="http://">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
                                                <option value="">-- Select Country --</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>                                
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>State/Province</label>
                                            <select class="form-control">
                                                <option>California</option>
                                                <option>Alaska</option>
                                                <option>Alabama</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" value="New York" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control" value="91403" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" value="818-978-7102" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input class="form-control" value="818-978-7102" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                        
                </div>
                <div class="tab-pane" id="Localization">
                    <div class="card text-white bg-green">
                        <div class="card-header">Basic Settings</div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Default Country</label>
                                            <select class="form-control">
                                                <option selected="selected">USA</option>
                                                <option>United Kingdom</option>
                                                <option>India</option>
                                                <option>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date Format</label>
                                            <select class="form-control">
                                                <option value="d/m/Y">15/05/2016</option>
                                                <option value="d.m.Y">15.05.2016</option>
                                                <option value="d-m-Y">15-05-2016</option>
                                                <option value="m/d/Y">05/15/2016</option>
                                                <option value="Y/m/d">2016/05/15</option>
                                                <option value="Y-m-d">2016-05-15</option>
                                                <option value="M d Y">May 15 2016</option>
                                                <option selected="selected" value="d M Y">15 May 2016</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Timezone</label>
                                            <select class="form-control">
                                                <option>10:45am Chicago (GMT-6)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Default Language</label>
                                            <select class="form-control">
                                                <option selected="selected">English</option>
                                                <option>Russian</option>
                                                <option>Arabic</option>
                                                <option>French</option>
                                                <option>Hindi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Currency Code</label>
                                            <select class="form-control">
                                                <option selected="selected">USD</option>
                                                <option>Pound</option>
                                                <option>EURO</option>
                                                <option>Ringgit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Currency Symbol</label>
                                            <input class="form-control" value="$" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right m-t-20">
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                    
                </div>
                <div class="tab-pane" id="Roles_Permissions">
                    <div class="card text-white bg-pink">
                        <div class="card-header">Roles & Permissions</div>
                        <div class="card-body">
                            <ul class="list-group mb-3 tp-setting">
                                <li class="list-group-item">
                                    Anyone seeing my profile page
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone send me a message
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone posts a comment on my post
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone invite me to group
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Module Permission</th>
                                            <th>Read</th>
                                            <th>Write</th>
                                            <th>Create</th>
                                            <th>Delete</th>
                                            <th>Import</th>
                                            <th>Export</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Employee</td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Holidays</td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leave Request</td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Events</td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="fancy-checkbox margin-0">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="tab-pane" id="Email_Settings">
                    <div class="card text-white bg-cyan">
                        <div class="card-header">SMTP Email Settings</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="PHP Mail" type="radio" checked><span><i></i>PHP Mail</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="SMTP" type="radio"><span><i></i>SMTP</span></label>
                                </div>							
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email From Address</label>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Emails From Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP HOST</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP USER</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP PASSWORD</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP PORT</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP Security</label>
                                            <select class="form-control">
                                                <option>None</option>
                                                <option>SSL</option>
                                                <option>TLS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>SMTP Authentication Domain</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 m-t-20 text-right">
                                        <button type="button" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>                            
                            </form>
                        </div>
                    </div>                    
                </div>
                <div class="tab-pane" id="Invoice_Settings">
                    <div class="card text-white bg-purple">
                        <div class="card-header">Invoice Settings</div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Invoice prefix</label>
                                            <input class="form-control" type="email">
                                        </div>                           
                                        <input type="file" class="dropify">
                                        <small class="text-danger">Recommended image size is 200px x 40px</small>
                                    </div>
                                    <div class="col-sm-12 m-t-20 text-right">
                                        <button type="button" class="btn btn-primary">SAVE</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>                                       
                </div>
                <div class="tab-pane" id="Notifications">
                    <div class="card text-white bg-orange">
                        <div class="card-header">Notifications Settings</div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Anyone send me a message
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone seeing my profile page
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone posts a comment on my post
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone send me a message
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Anyone seeing my profile page
                                    <div class="float-right">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Change_Password">
                    <div class="card text-white bg-blue">
                        <div class="card-header">Change Password</div>
                        <div class="card-body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" value="louispierce" disabled="" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="louis.info@yourdomain.com" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>                                
                                <div class="col-lg-12 col-md-12">
                                    <hr>
                                    <h6>Change Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                </div>
                                <div class="col-sm-12 m-t-20 text-right">
                                    <button type="button" class="btn btn-primary">SAVE</button> &nbsp;
                                    <button type="button" class="btn btn-default">CANCEL</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
@stop