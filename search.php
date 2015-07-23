<?php include 'header.php' ?>
<div class="col-md-9 content">
<?php
    $orig = $_GET['search-text'];
    $sanitized = strtolower(preg_replace("/[^a-z0-9_.]+/i", " ", $orig));
    $url = 'http://localhost:8080/search?search-text='.$sanitized;
    $raw = file_get_contents($url);
    $json = json_decode($raw);
    $projects = $json->{'projects'};
    $count = sizeof($projects);
?>
    <p>
        <h4>Found <?php echo $count; ?> result<?php if ($count != 1) echo 's'; ?> for <em><?php echo $sanitized; ?></em></h4>
    </p>
    <div class="portfolio-wrapper">
<?php
    $url = 'http://localhost:8080/search?search-text='.$sanitized;
    $raw = file_get_contents($url);
    $json = json_decode($raw);
    $projects = $json->{'projects'};
        for ($i = 0; $i < sizeof($projects); $i++) {
        $project = $projects[$i];
        include 'project.php';
        }
?>


    </div><!-- end portfolio-wrapper -->

</div><!-- end col -->

<?php include 'footer.php' ?>