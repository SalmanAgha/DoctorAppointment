<?php
session_start();
include('connect.php');
error_reporting(1);
if( !isset($_SESSION['userid']) ){
    header("location: Login.php");
}else{ 
    $userid = $_SESSION['userid'];
}

$block = 'block';
$result = 'none';

if($_SESSION['test2'] == 'Completed'){
    $block = 'none';
    $result = 'block';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php include 'meta.php';?>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper"> 
        <!-- Left Sidenav -->
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                   <li class="breadcrumb-item"><a href="javascript:void(0);">Test 2</a></li> 
                               </ol>
                           </div>
                           <h4 class="page-title">Welcome <?php echo $_SESSION['name'];?> </h4>
                       </div><!--end page-title-box-->
                   </div><!--end col-->
               </div>
               <div id="TestPage" <?php echo  ' style="display : '.$block.' ;"  ' ?>   >


                   <!-- Field Officer Fields -->
                   <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <?php
                            include 'Test2_Sections/Tab_Buttons.php';
                            ?>
                        </div><!--end card-body-->

                        <div class="tab-content">

                            <?php
                            include('Test2_Sections/Section1.php');
                            include('Test2_Sections/Section2.php');
                            include('Test2_Sections/Section3.php');
                            include('Test2_Sections/Section4.php');
                            include('Test2_Sections/Section5.php');
                            include('Test2_Sections/Section6.php');
                            include('Test2_Sections/Section7.php');
                            include('Test2_Sections/Section8.php');


                            ?>
                        </div>
                    </div><!--end tab-content-->
                </div>





            </div><!-- Test Page -->
            <div id="Test_Result"   <?php echo  ' style="display : '.$result.' ;"  ' ?> >
               <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                             <div class="col-sm-12 col-md-12 col-lg-12">
                                <center> <h1>Result</h1></center>
                                <center> <h3>UserID : <span id="userid">-</span></h3></center>
                                <center> <h3>Name : <span id="name">-</span></h3></center>
                                <center> <h3>Email : <span id="email">-</span></h3></center>
                                <center> <h3>Unique Code : <span id="uniquecode">-</span></h3></center>

                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3"> 
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6"> 
                              <table class="table table-striped">
                                <thead>
                                    <tr> 
                                       <td>Ranking</td>  <td>Section</td>

                                   </tr>
                               </thead>
                               <tbody id="result_table">
                                  <tr> 
                                    <td>Ranking</td>

                                    <td>Section</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div id="Linguistic" style="display:none;" >
                     <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
                      <h1>Linguistic</h1>
                      <table class="table">
                        <thead>

                            <th style="width: 25%;">Description</th>
                            <th style="width: 25%;">Rtypical Roles</th>
                            <th style="width: 25%;">Related Tasks / Activities</th>
                            <th style="width: 25%;">Preferred Learning Style Clues</th>

                        </thead>
                        <tbody>
                         <tr>
                             <td>words and language, 
                                written and spoken; 
                                retention, interpretation 
                                and explanation of ideas 
                                and information via 
                                language, understands 
                                relationship between 
                                communication and 
                            meaning </td>
                            <td>writers, lawyers, 
                                journalists, speakers, 
                                trainers, copy-writers, 
                                english teachers, poets, 
                                editors, linguists, 
                                translators, PR 
                                consultants, media 
                                consultants, TV and 
                            radio presenters, voice over artistes</td>
                            <td>write a set of 
                                instructions; speak 
                                on a subject; edit a 
                                written piece or 
                                work; write a 
                                speech; commentate 
                                on an event; apply 
                                positive or negative 
                            'spin' to a story</td>
                            <td>words and 
                            language</td> 
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>

        <!-- //section 2 -->
        <div id="Logical-Mathematical" style="display:none;" >
         <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
          <h1>Logical-Mathematical</h1>
          <table class="table">
            <thead>

                <th style="width: 25%;">Description</th>
                <th style="width: 25%;">Rtypical Roles</th>
                <th style="width: 25%;">Related Tasks / Activities</th>
                <th style="width: 25%;">Preferred Learning Style Clues</th>

            </thead>
            <tbody>
             <tr>
                 <td>logical thinking, 
                    detecting patterns, 
                    scientific reasoning and 
                    deduction; analyse 
                    problems, perform 
                    mathematical 
                    calculations, 
                    understands relationship 
                    between cause and 
                    effect towards a tangible 
                outcome or result </td>
                <td>scientists, engineers, 
                    computer experts, 
                    accountants, 
                    statisticians, 
                    researchers, analysts, 
                    traders, bankers 
                    bookmakers, insurance 
                    brokers, negotiators, 
                    deal-makers, trouble shooters, directors
                </td>
                <td>perform a mental 
                    arithmetic 
                    calculation; create a 
                    process to measure 
                    something difficult; 
                    analyse how a 
                    machine works; 
                    create a process; 
                    devise a strategy to 
                    achieve an aim; 
                    assess the value of a 
                    business or a 
                proposition</td>
                <td>numbers and 
                logic</td> 
            </tr>
        </tbody>

    </table>
</div>
</div>

<!-- section 3 -->
<div id="Musical"  style="display:none;">
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
     <h1>Musical</h1>
     <table class="table">
        <thead>

            <th style="width: 25%;">Description</th>
            <th style="width: 25%;">Rtypical Roles</th>
            <th style="width: 25%;">Related Tasks / Activities</th>
            <th style="width: 25%;">Preferred Learning Style Clues</th>

        </thead>
        <tbody>
         <tr>
             <td>musical ability, 
                awareness, appreciation and use of sound; 
                recognition of tonal and 
                rhythmic patterns, 
                understands relationship 
                between sound and 
            feeling </td>
            <td>musicians, singers, 
                composers, DJ's, music producers, piano tuners, 
                acoustic engineers, 
                entertainers, party planners, environment 
                and noise advisors, 
            voice coaches </td>
            <td>perform a musical 
                piece; sing a song; review a musical 
                work; coach 
                someone to play a 
                musical instrument; 
                specify mood music 
                for telephone 
                systems and 
            receptions  </td>
            <td>music, sounds, 
                rhythm
            </td> 
        </tr>
    </tbody>

</table>
</div>
</div>

<!-- section 4 -->
<div id="Bodily-Kinesthetic" style="display:none;">
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
  <h1>Bodily-Kinesthetic</h1>
  <table class="table">
    <thead>

        <th style="width: 25%;">Description</th>
        <th style="width: 25%;">Rtypical Roles</th>
        <th style="width: 25%;">Related Tasks / Activities</th>
        <th style="width: 25%;">Preferred Learning Style Clues</th>

    </thead>
    <tbody>
     <tr>
         <td>body movement 
            control, manual 
            dexterity, physical 
            agility and balance; eye 
        and body coordination</td>
        <td>dancers, demonstrators, 
            actors, athletes, divers, 
            sports-people, soldiers, 
            fire-fighters, PTI's, 
            performance artistes; 
            ergonomists, osteopaths, 
            fishermen, drivers, 
            crafts-people; 
            gardeners, chefs, 
            acupuncturists, healers, 
        adventurers</td>
        <td>juggle; demonstrate 
            a sports technique; 
            flip a beer-mat; 
            create a mime to 
            explain something; 
            toss a pancake; fly a 
            kite; coach 
            workplace posture, 
            assess work-station 
        ergonomics </td>
        <td>physical 
            experience and 
            movement, touch 
        and feel</td> 
    </tr>
</tbody>

</table>
</div>
</div>

<!-- section 5 -->
<div id="Spatial-Visual" style="display:none;" >
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
   <h1>Spatial-Visual</h1>
   <table class="table">
    <thead>

        <th style="width: 25%;">Description</th>
        <th style="width: 25%;">Rtypical Roles</th>
        <th style="width: 25%;">Related Tasks / Activities</th>
        <th style="width: 25%;">Preferred Learning Style Clues</th>

    </thead>
    <tbody>
     <tr>
         <td>visual and spatial 
            perception; 
            interpretation and 
            creation of visual 
            images; pictorial 
            imagination and 
            expression; understands 
            relationship between 
            images and meanings, 
            and between space and 
        effect</td>
        <td>artists, designers, 
            cartoonists, storyboarders, architects, 
            photographers, 
            sculptors, townplanners, visionaries, 
            inventors, engineers, 
            cosmetics and beauty 
        consultants</td>
        <td>design a costume; 
            interpret a painting; 
            create a room 
            layout; create a 
            corporate logo; 
            design a building; 
            pack a suitcase or 
        the boot of a car</td>
        <td>pictures, shapes, 
            images, 3D space
        </td> 
    </tr>
</tbody>

</table>
</div>
</div>


<!-- section 6 -->
<div id="Interpersonal" style="display:none;" >
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
    <h1>Interpersonal</h1>
    <table class="table">
        <thead>

            <th style="width: 25%;">Description</th>
            <th style="width: 25%;">Rtypical Roles</th>
            <th style="width: 25%;">Related Tasks / Activities</th>
            <th style="width: 25%;">Preferred Learning Style Clues</th>

        </thead>
        <tbody>
         <tr>
             <td>perception of other 
                people's feelings; 
                ability to relate to 
                others; interpretation of 
                behaviour and 
                communications; 
                understands the 
                relationships between 
                people and their 
                situations, including 
            other people</td>
            <td>therapists, HR 
                professionals, 
                mediators, leaders, 
                counsellors, politicians, 
                eductors, sales-people, 
                clergy, psychologists, 
                teachers, doctors, 
                healers, organisers, 
                carers, advertising 
                professionals, coaches 
                and mentors; (there is 
                clear association 
                between this type of 
                intelligence and what is 
                now termed 'Emotional 
                Intelligence' or EQ)
            </td>
            <td>interpret moods 
                from facial 
                expressions; 
                demonstrate 
                feelings through 
                body language; 
                affect the feelings 
                of others in a 
                planned way; coach 
                or counsel another 
            perso</td>
            <td>human contact, 
                communications, 
                cooperation, 
            teamwork</td> 
        </tr>
    </tbody>

</table>
</div>
</div>

<!-- section 7 -->
<div id="Intrapersonal" style="display:none;">
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
  <h1>Intrapersonal</h1>
  <table class="table">
    <thead>

        <th style="width: 25%;">Description</th>
        <th style="width: 25%;">Rtypical Roles</th>
        <th style="width: 25%;">Related Tasks / Activities</th>
        <th style="width: 25%;">Preferred Learning Style Clues</th>

    </thead>
    <tbody>
     <tr>
         <td>self-awareness, 
            personal cognisance, 
            personal objectivity, the 
            capability to understand 
            oneself, one's 
            relationship to others 
            and the world, and one's 
            own need for, and 
        reaction to change </td>
        <td>arguably anyone (see 
            note below) who is selfaware and involved in 
            the process of changing 
            personal thoughts, 
            beliefs and behaviour in 
            relation to their 
            situation, other people, 
            their purpose and aims -
            in this respect there is a 
            similarity to Maslow's 
            Self-Actualisation level, 
            and again there is clear 
            association between this 
            type of intelligence and 
            what is now termed 
            'Emotional Intelligence' 
            or EQ
        </td>
        <td>consider and decide 
            one's own aims and 
            personal changes 
            required to achieve 
            them (not 
            necessarily reveal
            this to others); 
            consider one's own 
            'Johari Window', 
            and decide options 
            for development; 
            consider and decide 
            one's own position 
            in relation to the 
            Emotional 
        Intelligence model</td>
        <td>self-reflection, 
            self-discovery
        </td> 
    </tr>
</tbody>

</table>
</div>
</div>

<!-- section 8 -->
<div id="section8" style="display:none;" >
 <div class="col-sm-12 col-md-12 col-lg-12 "  style="text-align:center;">
   <h1>section8</h1>
   <table class="table">
    <thead>

        <th style="width: 25%;">Description</th>
        <th style="width: 25%;">Rtypical Roles</th>
        <th style="width: 25%;">Related Tasks / Activities</th>
        <th style="width: 25%;">Preferred Learning Style Clues</th>

    </thead>
    <tbody>
     <tr>
         <td>words and language, 
            written and spoken; 
            retention, interpretation 
            and explanation of ideas 
            and information via 
            language, understands 
            relationship between 
            communication and 
        meaning </td>
        <td>writers, lawyers, 
            journalists, speakers, 
            trainers, copy-writers, 
            english teachers, poets, 
            editors, linguists, 
            translators, PR 
            consultants, media 
            consultants, TV and 
        radio presenters, voice over artistes</td>
        <td>write a set of 
            instructions; speak 
            on a subject; edit a 
            written piece or 
            work; write a 
            speech; commentate 
            on an event; apply 
            positive or negative 
        'spin' to a story</td>
        <td>words and 
        language</td> 
    </tr>
</tbody>

</table>
</div>
</div>






</div>




</div>

<?php
if($_SESSION['test1'] == 'Completed'){    
    $blocktext= 'Proceed to <a href="Home.php">Home Page</a>';
}
else {
    $blocktext= ' Proceed to <a href="Test1.php">Test 1 Page</a> ';

}
?>

<div class="row">
    <div class="col-md-12">

        <center><h1>

            <?php echo $blocktext;?>

        </h1></center>
    </div>
</div>


</div>
</div>
</div>
</div>
</div><!-- container -->
<?php include("footer.php");?>
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!--Plugins-->
<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<script src="functions/Test2.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>