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
                        <h3 class="pt-3">Apply For <span>Funding Now.</span></h3>
                    </div>
                    <p>Our streamlined funding process ensures that you have access to smart money quickly, allowing you to concentrate on growing your business.</p>
                </div>
            </div>
        </div>
        <div class="form w-50 mx-auto">
            <form class="card" style="background-color: #FFFDD0;">
                <div class="form-group py-3">
                    <label class="required">Startup Name</label>
                    <input type="text" required class="form-control" id="" placeholder="Startup Name">
                </div>
                <div class="form-group py-3">
                    <label class="required">Founder Name</label>
                    <input type="text" required class="form-control" id="" placeholder="Founder Name">
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
                    <label class="required">Position</label>
                    <input type="text" required class="form-control" id="" placeholder="Position">
                </div>
                <div class="form-group py-3">
                    <label class="required">Startup Description</label>
                    <textarea class="form-control" requiredrows="3"></textarea>
                </div>
                <div class="form-group py-3">
                    <label class="required">Industry</label>
                    <select class="form-control" required>
                        <option>AgriTech</option>
                        <option>AI & Machine Learning</option>
                        <option>E-Commerce</option>
                        <option>EdTech</option>
                        <option>eKYC</option>
                        <option>ERP</option>
                        <option>FinTech</option>
                        <option>Franshise</option>
                        <option>Hardware</option>
                        <option>HealthTech</option>
                        <option>InsurTech</option>
                        <option>Lending & Financing</option>
                        <option>Logistics</option>
                        <option>Manufacturing</option>
                        <option>Media</option>
                        <option>NFT</option>
                        <option>PropTech</option>
                        <option>Recruting</option>
                        <option>RegTech</option>
                        <option>Retail-Tech / B2B</option>
                        <option>Ride Hailing</option>
                        <option>Sales Management Platform</option>
                        <option>Smart Transport</option>
                        <option>Social Network</option>
                        <option>Tracking</option>
                        <option>Wholesale E-Commerce</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="">Website</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Website">
                </div>
                <div class="form-group py-3">
                    <label class="required">Country</label>
                    <select class="form-control" required>
                        <option>Australia</option>
                        <option>Austria</option>
                        <option>Bahrain</option>
                        <option>Belgium</option>
                        <option>Brazil</option>
                        <option>Canada</option>
                        <option>China</option>
                        <option>Cyprus</option>
                        <option>Czech Republic</option>
                        <option>Denmark</option>
                        <option>Estonia</option>
                        <option>Finland</option>
                        <option>France</option>
                        <option>Germany</option>
                        <option>Greece</option>
                        <option>Hong Kong SAR</option>
                        <option>Hungary</option>
                        <option>Iceland</option>
                        <option>India</option>
                        <option>Indonesia</option>
                        <option>Ireland</option>
                        <option>Israel</option>
                        <option>Italy</option>
                        <option>Japan</option>
                        <option>Kuwait</option>
                        <option>Latvia</option>
                        <option>Luxembourg</option>
                        <option>Malta</option>
                        <option>Mexico</option>
                        <option>Netherlands</option>
                        <option>New Zealand</option>
                        <option>Norway</option>
                        <option>Poland</option>
                        <option>Portugal</option>
                        <option>Qatar</option>
                        <option>Russia</option>
                        <option>Saudi Arabia</option>
                        <option>Singapore</option>
                        <option>South Korea</option>
                        <option>Spain</option>
                        <option>Sweden</option>
                        <option>Switzerland</option>
                        <option>Taiwan</option>
                        <option>Taiwan Province of China</option>
                        <option>Thailand</option>
                        <option>Turkey</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Startup Stage</label>
                    <select class="form-control" required>
                        <option>Idea Stage</option>
                        <option>Development Stage</option>
                        <option>Generating Revenue</option>
                        <option>Expansion Stage</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Funding Stage</label>
                    <select class="form-control" required>
                        <option>Pre-Seed</option>
                        <option>Seed</option>
                        <option>Pre-A</option>
                        <option>Series A</option>
                        <option>Pre-B</option>
                        <option>Series B</option>
                        <option>Series B+</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="required">Pitch Deck</label>
                    <input type="file" required class="form-control" id="" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <div class="form-group py-3">
                    <label class="">Supporting Documents (Optional)</label>
                    <input type="file" class="form-control" id="" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
require('footer.php');
