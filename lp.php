<?php
$heading = "Apply For Membership";
require('header.php');
?>

<div class="team-area">
    <div class="container section-padding">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title text-center">
                    <div class="head p-2">
                        <h3 class="pt-3">Invest with us<span>@ zero cost</span></h3>
                    </div>
                    <p>We meticulously evaluate potential investments using a rigorous 12-point criteria, including the depth of the problem being addressed, the scalability of the business model, financial performance, management team, market potential, and the innovative technology being employed.
                        <br><br>
                        Our core purpose is to generate high returns for our investors by providing early exits through investments in high-potential, early-stage companies.
                    </p>
                </div>
            </div>
        </div>
        <div class="form w-50 mx-auto">
            <form class="card">
                <div class="form-group py-3">
                    <label class="required">Full Name</label>
                    <input type="text" required class="form-control" id="" placeholder="Full Name">
                </div>
                <div class="form-group py-3">
                    <label class="required">Email address</label>
                    <input type="email" required class="form-control" id="" placeholder="Enter Email">
                </div>
                <div class="form-group py-3">
                    <label class="required">Phone Number</label>
                    <input type="text" required class="form-control" id="" placeholder="Phone Number">
                </div>
                <div class="form-group py-3">
                    <label class="required">City</label>
                    <input type="text" required class="form-control" id="" placeholder="City">
                </div>
                <div class="form-group py-3">
                    <label class="required">State</label>
                    <input type="text" required class="form-control" id="" placeholder="State">
                </div>
                <div class="form-group py-3">
                    <label class="">Linkedin Url</label>
                    <input type="text" class="form-control" id="" placeholder="Linkedin Url">
                </div>
                <div class="form-group py-3">
                    <label class="">Company Name</label>
                    <input type="text" class="form-control" id="" placeholder="Company Name">
                </div>
                <div class="form-group py-3">
                    <label class="">Referral (if any)</label>
                    <input type="text" class="form-control" id="" placeholder="Referral (if any)">
                </div>
                <div class="form-group py-3">
                    <label class="required">Are you an active investor ?</label>
                    <select class="form-control" required>
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
                <div class="h6 text-center">Accreditation</div>
                <div class="form-group py-3">
                    <label class="required">I am applying to invest as: </label>
                    <select class="form-control" required>
                        <option value=""> </option>
                        <option value="Myself as an individual"> Myself as an individual </option>
                        <option value="Trust"> Trust </option>
                        <option value="LLC"> LLC </option>
                        <option value="S-corp"> S-corp </option>
                        <option value="Fund"> Fund </option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required text-bold">Select one:</label>
                    <div class="row">
                        <div class="col-md-1 text-right p-0">
                            <input type="radio" required name="radio" id="">
                        </div>
                        <div class="col-md-11">
                            <p> Individual with a net worth (either individually or with my spouse, if any), and all property and other assets excluding my primary residence, that exceeds $1,000,000 including investments. </p>
                        </div>
                        <div class="col-md-1 text-right p-0">
                            <input type="radio" required name="radio" id="">
                        </div>
                        <div class="col-md-11">
                            <p> Individual with an annual income that was at least $200,000 in each of the two most recent years, and I expect such income in the current year.</p>
                        </div>
                        <div class="col-md-1 text-right p-0">
                            <input type="radio" required name="radio" id="">
                        </div>
                        <div class="col-md-11">
                            <p>Individual with an annual income, jointly with my spouse, of at least $300,000 in each of the two most recent years, and I expect such income in the current year.</p>
                        </div>
                        <div class="col-md-1 text-right p-0">
                            <input type="radio" required name="radio" id="">
                        </div>
                        <div class="col-md-11">
                            <p>An Entity (e.g., corporation, partnership, limited liability company, trust,etc.) in which all of the equity owners are accredited investors.</p>
                        </div>
                        <div class="col-md-1 text-right p-0">
                            <input type="radio" required name="radio" id="">
                        </div>
                        <div class="col-md-11">
                            <p>Other</p>
                        </div>
                    </div>
                </div>
                <div class="form-group py-3">
                    <label class="required text-bold">Declearation:</label>
                    <div class="row">
                        <div class="col-md-1 text-right p-0">
                            <input type="checkbox" name="radio" id="" required>
                        </div>
                        <div class="col-md-11">
                            <p>I agree that all the above information is correct, and that Alamo Angels may use the above information to contact me using the above information regarding my application as well news, alerts and other promotional materials</p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
require('footer.php');
