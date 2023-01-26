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
            <form class="card">
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
                        <option>FinTech</option>
                        <option>EdTech</option>
                        <option>InsurTech</option>
                        <option>HealthTech</option>
                        <option>PropTech</option>
                        <option>Retail-Tech / B2B</option>
                        <option>AgriTech</option>
                        <option>Lending & Financing</option>
                        <option>Sales Management Platform</option>
                        <option>AI & Machine Learning</option>
                        <option>E-Commerce</option>
                        <option>Wholesale E-Commerce</option>
                        <option>ERP</option>
                        <option>NFT</option>
                        <option>Tracking</option>
                        <option>Recruting</option>
                        <option>Social Network</option>
                        <option>eKYC</option>
                        <option>Hardware</option>
                        <option>Other</option>
                        <option>RegTech</option>
                        <option>Ride Hailing</option>
                        <option>Smart Transport</option>
                        <option>Franshise</option>
                        <option>Logistics</option>
                        <option>Manufacturing</option>
                        <option>Media</option>
                    </select>
                </div>
                <div class="form-group py-3">
                    <label class="">Website</label>
                    <input type="text" class="form-control" id="" placeholder="Enter Website">
                </div>
                <div class="form-group py-3">
                    <label class="required">Country</label>
                    <select class="form-control" required>
                        <option>Egypt</option>
                        <option>KSA</option>
                        <option>UAE</option>
                        <option>Kuwait</option>
                        <option>Jordan</option>
                        <option>Qatar</option>
                        <option>Bahrain</option>
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
                    <label class="required">Pitch Desk</label>
                    <input type="file" required class="form-control" id="" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <div class="form-group py-3">
                    <label class="">Pitch Desk</label>
                    <input type="file" class="form-control" id="" accept="application/pdf" placeholder="Upload PDF">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
require('footer.php');
