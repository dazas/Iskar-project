<?php
include './functions.php';
my_header('technical plan');
?>
<div id="main-content">
        <h2 class="page-title" id="title-1">technical plan</h2>
    <div class="page-content "> 
        <div class="stage st-1">
            <div class="txt stage-t">
                    <h6><span>1</span>initial stage</h6>   
                The old fish hatchery are deserted: the dikes and Cherni Iksar river which flows west along the area could be seen on the satellite images. The Iskar Dam, located north, is close. The area is used as a ground for illegal fishing, poaching and waste disposal.
            </div>
        </div>
        <div class="stage st-2">
            <div class="txt stage-t">
                <h6><span>2</span>the new water flow</h6>   
                <p>In order to re-establish the wetland huge parts of the ground need to be displaced. It is necessary for the old dikes at the fish hatchery to be removed and reconstructed, new dikes need to be built, certain parts of the terrain is necessary to be raised and others should go deeper. Upon completion of the construction works the Iskar river will flow in the new river bed where the river will split in a couple of shallow, slow-flowing streams on a 2,7 km long meander with an average width of about 200 m.</p>
            </div>
        </div>
        <div class="stage-btn-holder"><div class="stage-btn prev hidden">previous stage</div><div class="stage-btn next">next stage</div></div>
    </div>
    <div class="page-content hidden"> 
        <div class="txt work-t">
            <h6><span>3</span>final result</h6>   
            <p>Black Iskar river is a typical fast river, 20-30 m wide with an average depth of 50-80 cm. When reaching the 200 m wide wetland zone Iskar will turn into a more slaw-flowing river. There will be small islands, deeper areas and areas with standing water at the new river bed. Thereby perfect conditions for establishing a wetland area will be created.</p>
<br/>
<p>After creating those favorable conditions the ecosystem will have the change to self-heal. Along the river local reeds with significant purifying capacity will be planted. Along the new reinforced dike and the other internal banks alder, willow and other local trees will be planted. Furthermore, in the deeper areas there will be water lilies and other water plants which are extremely important for creating favorable conditions for fish spawning.</p>
</div> 
        <div class="stage-final">
            <?php
            $pins = array(
                "reinforced concrete dike and spillway", //pin-1
                "grid for bulky waste", //pin-2
                "bird habitats", //pin-3
                "higher plants (alder)", //pin-4
                "wildlife", //pin-5
                "main facility ", //pin-6
                "observatory", //pin-7
                "water lilies", //pin-8
                "pedestrian bridge to the observatory", //pin-9
                "eurasian Bittern", //pin-10
                "11", //pin-11
                "fish spawning season", //pin-12
                "internal banks", //pin-13
                "cattails", //pin-14
                "otter", //pin-15
                "cattails / spillway", //pin-16
                
                );
            
             $pin_imgs = array(
                "<img src=\"../images/work-pin1.jpg\">", //pin-1
                "<img src=\"../images/work-pin2.jpg\">", //pin-3
                "<img src=\"../images/work-pin3.jpg\">", //pin-3
                "<img src=\"../images/work-pin4.jpg\">", //pin-4
                "<img src=\"../images/work-pin5.jpg\">", //pin-5
                "<img src=\"../images/work-pin6.jpg\">", //pin-6
                "<img src=\"../images/work-pin7.jpg\">", //pin-7
                "<img src=\"../images/work-pin8.jpg\">", //pin-8
                "<img src=\"../images/work-pin9.jpg\">", //pin-9
                "<img src=\"../images/work-pin10.jpg\">", //pin-10
                "<img src=\"../images/work-pin11.jpg\">", //pin-11
                "<img src=\"../images/work-pin12.jpg\">", //pin-12
                "<img src=\"../images/work-pin13.jpg\">", //pin-13
                "<img src=\"../images/work-pin14.jpg\">", //pin-14
                "<img src=\"../images/work-pin15.jpg\">", //pin-15
                "<img src=\"../images/work-pin16.jpg\">", //pin-16
            );
            for ($x = 0; $x < 16; $x++) {
                echo '<div class="work-pin pin-' . ($x + 1) . '"></div><div class="active-pin">' . $pin_imgs[$x] . '<h4>' . $pins[$x] . '</h4></div>';
            }
            ?>
        </div>
        <div class="stage-btn-holder"><div class="stage-btn prev ">previous stage</div><div class="stage-btn hidden">next stage</div></div>
    </div>
</div>
<?php
my_footer();