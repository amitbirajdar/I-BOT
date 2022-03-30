<?php
session_start();
$id=$_GET['id'];
if ($id=="front") {
  ?>
  <div id="jhl" ><label for="hl" style="font-size: 30px;"><input type="checkbox" name="hl" onclick="khl()"/>  Are the Head-lights damaged?</label></div>
  <div id="jfl" ><label for="fl" style="font-size: 30px;"><input type="checkbox" name="fl" onclick="kfl()"/>  Are the front Fog-lights damaged?</label></div>
  <div id="jfluid" ><label for="fluid" style="font-size: 30px;"><input type="checkbox" name="fluid" onclick="kfluid()"/>  Is there any fluid leaking?</label></div>
    <div id="jstarter" ><label for="starter" style="font-size: 30px;"><input type="checkbox" name="starter" value="5500">  Is the car stalling or not starting properly?</label></div>
    <div id="jstrass" ><label for="strass" style="font-size: 30px;"><input type="checkbox" name="strass" value="9000">  Is the car changing direction without steering input ?</label></div>
    <div id="jsuspf" ><label for="suspf" style="font-size: 30px;"><input type="checkbox" name="suspf" value="13000">  Is the Suspension degraded or making sounds?</label></div>
    <div id="jac" ><label for="ac" style="font-size: 30px;"><input type="checkbox" name="ac" value="12000">  Is the AC not working satisfactorily ?</label></div>
    <div id="jba" ><label for="ba" style="font-size: 30px;"><input type="checkbox" name="ba" value="8000">  Is the Braking unsatisfactory?</label></div>
    <div id="jfwsh" ><label for="fwsh" style="font-size: 30px;"><input type="checkbox" name="fwsh" value="12000">  Is the Front Windshield shatted?</label></div>
<?php  }
if ($id=="side") {
  ?>
  <div id="jfsw" ><label for="fsw" style="font-size: 30px;"><input type="checkbox" name="fsw" onclick="kfsw()" />  Are the Front Side-Windows damaged?</label></div>
  <div id="jrsw" ><label for="rsw" style="font-size: 30px;"><input type="checkbox" name="rsw" onclick="krsw()"/>  Are the Rear Side-Windows damaged?</label></div>
  <div id="jorvm" ><label for="orvm" style="font-size: 30px;"><input type="checkbox" name="orvm" onclick="korvm()"/>  Are the ORVM(s) damaged?</label></div>
  <div id="jspeakers" ><label for="speakers" style="font-size: 30px;"><input type="checkbox" name="speakers" onclick="kspeakers()" value="2500">  Are the Speakers not working?</label></div>
  <div id="jalloy" ><label for="alloy" style="font-size: 30px;"><input type="checkbox" name="alloy" onclick="kalloy()" value="6500">  Are the Rims damaged?</label></div>
  <div id="jwindow" ><label for="window" style="font-size: 30px;"><input type="checkbox" name="window" onclick="kwindow()" value="2400">  Is the Window operation impaired?</label></div>
<?php  }
if ($id=="rear") {
  ?>
  <div id="jtl" ><label for="tl" style="font-size: 30px;"><input type="checkbox" name="tl" onclick="ktl()"/>  Are the Tail-lights damaged?</label></div>
  <div id="jsuspr" ><label for="suspr" style="font-size: 30px;"><input type="checkbox" name="suspr" value="10000">  Is the Suspension degraded or making sounds?</label></div>
  <div id="jmuff" ><label for="muff" style="font-size: 30px;"><input type="checkbox" name="muff" value="1200">  Is the Vehicle producing loud sounds?</label></div>
  <div id="jexas" ><label for="exas" style="font-size: 30px;"><input type="checkbox" name="exas" value="8000">  Is Smoke emanating from the vehicle?</label></div>
  <div id="jrwsh" ><label for="rwsh" style="font-size: 30px;"><input type="checkbox" name="rwsh" value="12000">  Is the Rear Windshield shatted?</label></div>
<?php  }
if ($id=="rsw") {
  ?>
  <br><select name="qrsw" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for Rear Side Window</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
 <?php  }
if ($id=="fsw") {
  ?>
  <select name="qfsw" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for Front Side Window</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
 <?php  }
if ($id=="hl") {
  ?>
  <select name="qhl" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for Head-lights</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
<?php  }
if ($id=="tl") {
  ?>
  <select name="qtl" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for Tail-lights</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
<?php }
if ($id=="orvm") {
  ?>
  <br><select name="qorvm" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for ORVM(S)</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
<?php  }
if ($id=="fl") {
  ?>
  <br><select name="qfl" class="form-control" style="width:60%;">
      <option value disabled selected>Select side for Front Fog-lights</option>
      <option value="1">Left</option>
      <option value="1">Right</option>
      <option value="2">Both sides</option>
    </select><br>
<?php  }
if ($id=="speakers") {
  ?>
  <br><select name="qspeakers" class="form-control" style="width:60%;">
      <option value disabled selected>Select no of Speakers</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>

    </select><br>
    <?php }
if ($id=="alloy") {
  ?>
  <br><select name="qalloy" class="form-control" style="width:60%;">
      <option value disabled selected>Select no of Alloys</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>

    </select><br>
    <?php }
if ($id=="window") {
  ?>
  <br><select name="qwindow" class="form-control" style="width:60%;">
      <option value disabled selected>Select no of Window Assembly</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>

    </select><br>
    <?php }
if ($id=="fluid") {
  ?>
  <br>
    <div id="jrad" ><label for="rad" style="font-size: 30px;"><input type="checkbox" name="rad" value="3500">  Is the colour of fluid Green/Blue?</label></div>
    <div id="jengine" ><label for="engine" style="font-size: 30px;"><input type="checkbox" name="engine" value="6500">  Is the colour of fluid Brown?</label></div>
    <div id="jbrkf" ><label for="brkf" style="font-size: 30px;"><input type="checkbox" name="brkf" value="3500">  Is the colour of fluid clear and it smells?</label></div>
    <div id="jstrf" ><label for="strf" style="font-size: 30px;"><input type="checkbox" name="strf" value="4800">  Is the colour of fluid clear and it does'nt smell?</label></div>
  <br>
    <?php }