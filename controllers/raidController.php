<?php

 if (isset($_POST['confirmDelIntro']))
 {
     include_once '../configuration.php';
     $deleteContent = new u01cc_contribs();
     $deleteContent->id = htmlspecialchars($_POST['introID']);
     $deleteContentResult = $deleteContent->deleteContent();
     echo true;
          header('location: ../views/raid.php');

 }
 elseif (isset($_POST['confirmDelStep']))
 {
     include_once '../configuration.php';
     $deleteStepContent = new u01cc_raidSteps();
     $deleteStepContent->id = htmlspecialchars($_POST['stepId']);
     $deleteStepContentResult = $deleteStepContent->deleteStepContent();
     echo true;
          header('location: ../views/raid.php');

 }
 else
 {
      if (isset($_POST['summary']))
     {
         include_once '../configuration.php';

         $getRaid = new u01cc_raidSteps();
         $getRaid->id_u01cc_contribs = $_POST['summary'];
         $getRaidResult = $getRaid->getRaid();
     }
     include_once '../configuration.php';

     $getTitleRaid = new u01cc_contribs();
     $getTitleRaidResult = $getTitleRaid->getTitleRaid();
 }
?>