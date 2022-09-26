<?php

function headlinks(){
                $headlinks="
                <!DOCTYPE html>
                <html  >
                <head>
                    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
                    <meta charset=\"UTF-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <meta name=\"generator\" content=\"Mobirise v5.6.13, mobirise.com\">
                    <meta name=\"twitter:card\" content=\"summary_large_image\"/>
                    <meta name=\"twitter:image:src\" content=\"\">
                    <meta property=\"og:image\" content=\"\">
                    <meta name=\"twitter:title\" content=\"Home\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
                    <link rel=\"shortcut icon\" href=\"assets/images/logo.png\" type=\"image/x-icon\">
                    <meta name=\"description\" content=\"\">


                    <title>Home</title>
                    <link rel=\"stylesheet\" href=\"assets/web/assets/mobirise-icons2/mobirise2.css\">
                    <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\">
                    <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap-grid.min.css\">
                    <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap-reboot.min.css\">
                    <link rel=\"stylesheet\" href=\"assets/dropdown/css/style.css\">
                    <link rel=\"stylesheet\" href=\"assets/socicon/css/styles.css\">
                    <link rel=\"stylesheet\" href=\"assets/theme/css/style.css\">

                    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
                <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
                <link href=\"https://fonts.googleapis.com/css2?family=Roboto&display=swap\" rel=\"stylesheet\">
                    <noscript><link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap\"></noscript>
                    <link rel=\"preload\" as=\"style\" href=\"assets/mobirise/css/mbr-additional.css\"><link rel=\"stylesheet\" href=\"assets/mobirise/css/mbr-additional.css\" type=\"text/css\">
                </head>
                ";
                echo $headlinks;
}



function navbar($home,$aboutus,$services,$contacts){

    $navbar = " <nav class=\"navbar navbar-dropdown navbar-fixed-top navbar-expand-lg\">
    <div class=\"container\">
        <div class=\"navbar-brand\">
            <span class=\"navbar-logo\">
                <a href=\"index.html\">
                    <img src=\"assets/images/logo.png\" alt=\"Mobirise Website Builder\" style=\"height: 3rem;\">
                </a>
            </span>
            <span class=\"navbar-caption-wrap\"><a class=\"navbar-caption text-black display-7\" href=\"https://mobiri.se\">DaInsite Blog</a></span>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-bs-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <div class=\"hamburger\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav nav-dropdown\" data-app-modern-menu=\"true\">
            <li class=\"nav-item\"><a class=\"nav-link link text-black display-4\" href=\"https://mobiri.se\">
            $home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link link text-black display-4\" href=\"https://mobiri.se\">
                        $aboutus</a></li>
                <li class=\"nav-item\"><a class=\"nav-link link text-black display-4\" href=\"https://mobiri.se\">
                        $services</a></li>
                <li class=\"nav-item\"><a class=\"nav-link link text-black display-4\" href=\"https://mobiri.se\">$contacts</a>
                </li>
            </ul>

            <div class=\"navbar-buttons mbr-section-btn\"><a class=\"btn btn-primary display-4\" href=\"https://mobiri.se\">
                    Download songs</a></div>
        </div>
    </div>
</nav>";

echo $navbar;
}



function fullscreenImage($titleText,$descriptionText,$btnName){
    $element =
    "
                    <div class=\"mbr-overlay\" style=\"opacity: 0.1; background-color: rgb(250, 250, 250);\"></div>

                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-5\">
                                <h1 class=\"mbr-section-title mbr-fonts-style mb-3 display-1\"><strong>$titleText </strong></h1>

                                <p class=\"mbr-text mbr-fonts-style display-7\">
                                    $descriptionText </p>
                                <div class=\"mbr-section-btn mt-3\"><a class=\"btn btn-secondary display-4\" href=\"https://mobiri.se\">$btnName </a></div>
                            </div>
                        </div>
                    </div>
                </section>
    
    
    ";

    echo $element;
}

function resentReleaseTittle($Ttext,$Btext){
    $element = "
                    <div class=\"mbr-section-head\">
                            <h4 class=\"mbr-section-title mbr-fonts-style align-center mb-0 display-2\">
                                <strong>$Ttext </strong></h4>
                            <h5 class=\"mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5\">$Btext </h5>
                        </div>
    
    ";
    echo $element;
}

function resentReleaseContenet($image,$tittle,$content){

    $element = "
            <div class=\"item features-image сol-12 col-md-6 col-lg-4\">
                <div class=\"item-wrapper\">
                    <div class=\"item-img\">
                        <img src=\"assets/images/$image\" alt=\"Mobirise Website Builder\">
                    </div>
                    <div class=\"item-content\">
                        <h5 class=\"item-title mbr-fonts-style display-7\"><strong>$tittle </strong></h5>

                        <p class=\"mbr-text mbr-fonts-style mt-3 display-7\">$content</p>
                    </div>
                    <div class=\"mbr-section-btn item-footer mt-2\"><a href=\"\" class=\"btn btn-primary item-btn display-7\" target=\"_blank\">Learn More
                            &gt;</a></div>
                </div>
            </div>
    
    
    
    ";

    echo $element;




}



function normalpost($title,$link,$desc){
  $element= " <div class=\"row justify-content-center mt-2 \">
    
    <div class=\"col-12 col-md-4  video-block\">
    <div class=\"mbr-section-head\">
        <h4 class=\"mbr-section-title mbr-fonts-style mb-0 display-2\">
            <strong>$title</strong></h4>
        <h5 class=\"mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7\">Click on the video in this block to set the link to
            your own video.</h5>
    </div>
        <div class=\"video-wrapper\"><iframe class=\"mbr-embedded-video\" src=\"$link\" width=\"1280\" height=\"720\" frameborder=\"0\" allowfullscreen></iframe></div>
        <p class=\"mbr-text pt-2 mbr-fonts-style display-4\">
           $desc</p>
    </div>
</div>
</div>";
echo $element;
}

function rightnavContenet($image,$tittle,$content){
    $element = " <div class=\"item-wrapper\">
    <div class=\"item-img\">
        <img src=\"assets/images/$image\" alt=\"Mobirise Website Builder\">
    </div>
    <div class=\"item-content\">
        <h5 class=\"item-title mbr-fonts-style display-7\"><strong>$tittle </strong></h5>

        <p class=\"mbr-text mbr-fonts-style mt-3 display-7\">$content</p>
    </div>
    <div class=\"mbr-section-btn item-footer mt-2\"><a href=\"\" class=\"btn btn-primary item-btn display-7\" target=\"_blank\">Learn More
            &gt;</a></div>
</div>";
echo $element;

}

function feeds($image,$tittle,$content){
    $element = " <div class=\"item-wrapper\">
    <div class=\"item-img\">
        <img src=\"assets/images/$image\" alt=\"Mobirise Website Builder\">
    </div>
    <div class=\"item-content\">
        <h5 class=\"item-title mbr-fonts-style display-7\"><strong>$tittle </strong></h5>

        <p class=\"mbr-text mbr-fonts-style mt-3 display-7\">$content</p>
    </div>
    <div class=\"mbr-section-btn item-footer mt-2\"><a href=\"\" class=\"btn btn-primary item-btn display-7\" target=\"_blank\">Learn More
            &gt;</a></div>
</div>";
echo $element;
    
}

function leftnav($image,$tittle,$content){
    $element = " <div class=\"item-wrapper\">
    <div class=\"item-img\">
        <img src=\"assets/images/$image\" alt=\"Mobirise Website Builder\">
    </div>
    <div class=\"item-content\">
        <h5 class=\"item-title mbr-fonts-style display-7\"><strong>$tittle </strong></h5>

        <p class=\"mbr-text mbr-fonts-style mt-3 display-7\">$content</p>
    </div>
    <div class=\"mbr-section-btn item-footer mt-2\"><a href=\"\" class=\"btn btn-primary item-btn display-7\" target=\"_blank\">Learn More
            &gt;</a></div>
</div>";
echo $element;
    
}


function videoPost($link,$tittle,$content){
    $element = " <div class=\"item-wrapper\" style=\"\">
    <div class=\"item-img\">
    <div class=\"video-wrapper\"><iframe class=\"mbr-embedded-video\" src=\"$link\" width=\"1280\" height=\"720\" frameborder=\"0\" allowfullscreen></iframe></div>
    </div>
    
    <div class=\"item-content\">
        <h5 class=\"item-title mbr-fonts-style display-7\"><strong>$tittle </strong></h5>

        <p class=\"mbr-text mbr-fonts-style mt-3 display-7\">$content</p>
    </div>
    <div class=\"mbr-section-btn item-footer mt-2\"><a href=\"\" class=\"btn btn-primary item-btn display-7\" target=\"_blank\">Learn More
            &gt;</a></div>
</div>";
echo $element;
    
}











?>
