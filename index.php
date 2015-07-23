<?php include 'header.php';?>
<div class="col-md-9 content">
    <div class="portfolio-wrapper">
<?php

$raw = file_get_contents('http://localhost:8080/get');
$json = json_decode($raw);
$projects = $json->{'projects'};
for ($i = 0; $i < sizeof($projects); $i++) {
    $project = $projects[$i];
    include 'project.php';
}
?>


    </div><!-- end portfolio-wrapper -->
    <div class="pagination-wrapper">
        <ul class="pagination">
            <li class="disabled"><span>Prev</span></li>
            <li class="active"><a href="#none">1</a></li>
            <li><a href="#none">2</a></li>
            <li><a href="#none">3</a></li>
            <li><a href="#none">4</a></li>
            <li><a href="#none">5</a></li>
            <li><a href="#none">Next</a></li>
        </ul>
    </div><!-- end pagination-wrapper -->
</div><!-- end col -->

<?php include 'footer.php';?>

