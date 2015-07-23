<div class="card <?php echo $project->tags; ?>">
    <a href="portfolio-item.html?id=<?php echo $project->id; ?>" class="thumb">
        <img src="img/projects/<?php echo $project->icon; ?>" alt="" title="" />
        <span class="overlay"><span class="fa fa-search"></span></span>
    </a>
    <div class="card-body">
        <h2><a href="portfolio-item.html?id=<?php echo $project->id; ?>"><?php echo $project->name; ?></a></h2>
        <p><?php echo $project->short_description; ?></p>
        <p><a href="portfolio-item.html?id=<?php echo $project->id; ?>">Read More</a></p>
    </div><!-- end card-body -->
    <div class="card-footer">
        <ul class="list-inline filters">
            <?php
                $tags = explode(" ", $project->tags);
                for ($j = 0; $j < sizeof($tags); $j++) {
            ?>
                    <li><a href=\"#none\"><?php echo $tags[$j]; ?></a></li>
            <?php
                }
            ?>
        </ul>
    </div><!-- end card-footer -->
</div><!-- end card -->
