<?php
$heading = "Portfolio";
require('header.php');
?>
<style>
    .portfolio-card {
        position: relative;
        border-radius: 30px;
        background-color: #fff;
        transition: box-shadow .4s cubic-bezier(.25, .46, .45, .94);
        margin: 10px;
    }

    .portfolio-card:hover {
        box-shadow: 1px 1px 15px 1px #0cde7050;
    }

    .portfolio-card-link {
        display: flex;
        width: 100%;
        height: 100%;
        padding-bottom: 100%;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 30px;
        background-color: #fff;
        background-position: 50% 50%;
        background-size: 70%;
        background-repeat: no-repeat;
        color: #212121;
        text-decoration: none;
    }

    a.portfolio-card-link.w-inline-block .list {
        position: absolute;
        bottom: 0;
    }
</style>
<div class="team-area bg-light">
    <div class="container section-padding">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="section-title text-center p-0">
                    <div class="head p-2">
                        <h3 class="pt-3">Portfolio <span>Companies</span></h3>
                    </div>
                    <p>We’ve had the pleasure of collaborating with visionary entrepreneurs behind transformative ventures.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            $sql = "SELECT filename, cat FROM portfolio order by id desc";
            $result = mysqli_query($conn, $sql);
            $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-3 p-0">
                            <div class="portfolio-card w-dyn-item">
                                <a style="background-image:url(&quot;<?= $protocol . $_SERVER['HTTP_HOST'] . '/admin/pf/' . $row['filename'] ?>&quot;)" href="javascript:void(0)" class="portfolio-card-link w-inline-block">
                                    <p class="list"><?php echo $row['cat'] ?></p>
                                </a>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
require('footer.php');
