<?php
    $thisPage="Doctor Details";
	include('includes/header.php');
?>
        
    <div class="main-content">
        <h2>Doctor Details</h2>
        <form action="" class="register">
            <fieldset class="row1">
                <legend>Personal Details</legend>
                <p>
                    <label>Name * </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Phone * </label>
                    <input type="text" maxlength="10"/>
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>City *</label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Country *</label>
                    <select>
                        <option>
                        </option>
                        <option value="1">United States
                        </option>
                        <option value="2">France
                        </option>
                        <option value="3">India
                        </option>
                        <option value="4">China
                        </option>
                        <option value="5">Japan
                        </option>
                        <option value="6">Germany
                        </option>
                        <option value="7">Australia
                        </option>
                        <option value="8">Canada
                        </option>
                        <option value="9">England
                        </option>
                    </select>
                </p>
                <p>
                    <label class="optional">Website</label>
                    <input class="long" type="text" value="http://"/>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select class="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
                </p>
                <p>
                    <label>Nationality *
                    </label>
                    <select>
                        <option value="0">
                        </option>
                    </select>
                </p>
                <p>
                    <label>Speciality *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Department *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Qualifications *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label> Availability *
                    </label>
                    <input type="checkbox" value="" />
                </p>
                <div class="infobox"><h2>Helpful Information</h2>
                    <p> Doctors can edit and change thier Personal information </p>
                </div>
            </fieldset>
            <fieldset class="row3">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
            </fieldset>
            <div>
                <button class="Edit">Edit &raquo; </button>
                <button class="button">Save &raquo;</button>
            </div>
        </form>
            
    </div>
        
</div>

<?php
	include('includes/footer.php');
?>