<?php
$heading = "Portfolio";
require('header.php');
?>
<style>
    .single-team.mt-2 {
        transform: scale(0.9) translate(0%, -5%);
        padding: 0 0 25px 0;
    }
</style>
<div class="team-area bg-light">
    <div class="container p-2">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title text-center p-0">
                    <div class="head p-2">
                        <h3 class="pt-3">Our Expert <span>Team Member</span></h3>
                    </div>
                    <p>We are a group of individuals with a passion for entrepreneurship.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- single team -->
            <div class="col-md-3">
                <div class="single-team mt-2">
                    <div class="single-team1">
                        <img class="mx-auto" src="assets/img/saif.png" alt="">
                        <div class="overlay mx-auto"></div>
                    </div>
                    <h2 class="heading-team">Mohd Saif</h2>
                    <p class="para-team">Founding Partner</p>
                    <a class="social-team" target="_blank" href="https://www.linkedin.com/in/mohd-saif-60495021/"><i class="fa fa-linkedin"></i></a>
                    <a class="social-team" target="_blank" href="mailto:saif@oliveventurepartners.in"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-team mt-2">
                    <div class="single-team1">
                        <img class="mx-auto" src="assets/img/naresh.png" alt="">
                        <div class="overlay mx-auto"></div>
                    </div>
                    <h2 class="heading-team">Naresh Kumar</h2>
                    <p class="para-team">Founding Partner</p>
                    <a class="social-team" target="_blank" href="https://www.linkedin.com/in/naresh-kumar-cwm%C2%AE-65446121/"><i class="fa fa-linkedin"></i></a>
                    <a class="social-team" target="_blank" href="mailto:naresh@oliveventurepartners.in"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
            <!-- single team -->
        </div>
    </div>
</div>
<?php
require('footer.php');
