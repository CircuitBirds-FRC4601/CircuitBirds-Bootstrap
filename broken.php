<!DOCTYPE html>
<html>
<?php include_once( 'header.php'); ?>

<body>
    <div class="container">
        <?php include_once( 'menu.php'); ?>
        <div class="row">
            <form class="form">
                <div class="well">
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="FName">First name</label>
                                <input type="text" class="form-control" id="FName" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="LName">Last name</label>
                                <input type="text" class="form-control" id="LName" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="Email">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder="Enter a password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-2">
                                <label class="control-label" for="Gradelevel">Grade</label>
                                <select id="Gradelevel" class="form-control">
                                    <option>-</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-5">
                                <label class="control-label" for="SPhone">Phone Number</label>
                                <input type="tel" class="form-control disabledTextInput" id="SPhone" placeholder="Enter a cellphone number, if you have one">
                            </div>
                        </div>
                        <hr>
                        <label class="control-label" for="LName">Interests</label>
                        <span class="help-block">Select any of the following areas that you would like to be apart of on the team.</span>
                        <div class="row">
                            <div class="form-inline">
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i1" type="checkbox">Design/art</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i2" type="checkbox">Writing</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i3" type="checkbox">Public Speaking or Marketing</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i4" type="checkbox">Mechanical/Electrical Things</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i5" type="checkbox">Programming</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i6" type="checkbox">Web Design</label>
                                </div>
                                <div class="checkbox">
                                    <label style="padding:10px;">
                                        <input id="i7" type="checkbox">Other</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="PEmail">Parent Email</label>
                                <input type="email" class="form-control disabledTextInput" id="PEmail" placeholder="Enter a parent's email.">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="btn-group  well">
                    <button type="button" class="btn btn-default " onclick="Error()">Error()</button>
                    <button type="button" class="btn btn-primary " onclick="ResetError()">ResetError()</button>
                    <button type="button" class="btn btn-info " onclick="SuccessShowModal()">SuccessShowModal()</button>
                    <button type="button" class="btn btn-success " onclick="Verify()">Verify()</button>
                </div>
            </div>
        </div>
        <?php include_once( 'sidebar.php'); ?>
    </div>
    <?php include_once( 'modal.php'); ?>
    <?php include_once( 'scripts.php'); ?>
</body>
</html>
