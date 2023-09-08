<?php

include("../navigation/navigation.php");


?>

<style>
      .form-group label{
        margin: 10px 0px 10px 0px;
    }

    .display {
      display: flex;
      flex-direction: row;
    }

    .up {
      display: flex;
      flex-direction: row;
      float: right;
      margin-right: 5px;
    }
  </style>


<div class="container mt-4">
  <div class="card border " class="rounded" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);margin-top: 50px;">
    <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
      View Profile
      <span class="float-right">
        <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle" class="float-end">
      </span>
    </div>
    <div id="maindiv">
      <div class="card-body ">
        <div class="row ">
          <div class="col-md-6 ">
            <table class="table table-bordered ">
              <tbody>
                <tr>
                  <td><strong>User Name:</strong></td>
                  <td>
                    <font color="#FF6200">
                      <?php echo ($d_fullname); ?>
                    </font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Gender:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Mobile:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Designation:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of Birth:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Present Address:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered ">
              <tbody>
                <tr>
                  <td><strong>Permanent Address:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Date of joining:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Personal Email:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Official Email:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Contact Number [In case of Emergency]:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
                <tr>
                  <td><strong>Emergency Remarks:</strong></td>
                  <td>
                    <font color="#FF6200">-</font>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container mt-4 col-lg-12">
    <div class="card rounded-1">
      <div class="card-header header-line" onclick="showhide('maindiv','toggleimg');">
        <div class="row">
          <div class="col-md-14">
            Enter/Edit/View Details
          </div>

        </div>
      </div>
      <div class="card-body" id="maindiv">
        <form action="" method="post" name="submitform" id="submitform" onsubmit="return false;">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="customername">Full Name:</label>
                <input name="customername" type="text" class="form-control" id="customername" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="s_productgroup">Gender:</label>
                <select name="s_productgroup" class="form-select swiftselect form-control" id="s_productgroup">
                  <option value="" selected="selected">ALL</option>
                </select>
                <!-- Details are in javascript.js page as a function prdgroup();-->
              </div>

              <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input name="mobile" type="tel" class="form-control" id="mobile" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="mobile">Designation:</label>
                <input name="mobile" type="text" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Date of Birth:</label>
                <input name="mobile" type="date" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Present Address:</label>
                <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                  data-gramm="false" wt-ignore-input="true"></textarea>
              </div>
              <!-- Repeat similar pattern for other form inputs -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="teamleaderremarks">Present Address:</label>
                <textarea name="teamleaderremarks" cols="45" class="form-control" id="teamleaderremarks"
                  data-gramm="false" wt-ignore-input="true"></textarea>
              </div>
              <div class="form-group">
                <label for="mobile">Date of Joining:</label>
                <input name="mobile" type="date" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Personal Email:</label>
                <input name="mobile" type="email" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Official Email:</label>
                <input name="mobile" type="email" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Contatc Number[In case of Emergency]:</label>
                <input name="mobile" type="text" class="form-control" id="mobile" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="mobile">Remarks[Details of person in case of Emergency]:</label>
                <input name="mobile" type="text" class="form-control" id="mobile" autocomplete="off">
              </div>
              <!-- Repeat similar pattern for other form inputs -->
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-8">
                <div id="form-error"></div>
              </div>
              <div class="col-md-4 text-end mt-3">
                <input name="new" type="submit" class="btn btn-secondary" id="view" value="New"
                  onclick="formsubmit('toview');">
                <input name="save" type="submit" class="btn btn-primary" id="view" value="Save"
                  onclick="formsubmit('toview');">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container mt-3 ">
    <div class="card" style="box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.363);">
      <div class="card-header bg-light" style="cursor: pointer;" onclick="showhide('maindiv', 'toggleimg');">
        Enter / Edit / View Details
        <span class="float-end">
          <img src="../images/minus.jpg" border="0" id="toggleimg" name="toggleimg" align="absmiddle">
        </span>
      </div>
      <div id="maindiv" style="display: block;">
        <div class="card-body">
          <form action="" method="post" name="submitform" id="submitform">
            <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Old Password:</label>
              <div class="col-sm-9">
                <input name="password" type="password" class="form-control" id="password" size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <label for="newpassword" class="col-sm-3 col-form-label">New Password:</label>
              <div class="col-sm-9">
                <input name="newpassword" type="password" class="form-control" id="newpassword" size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm Password:</label>
              <div class="col-sm-9">
                <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" size="30">
              </div>
            </div> <br>
            <div class="form-group row">
              <div class="col-sm-9 offset-sm-3" id="form-error"></div>
            </div>
            <div class="form-group row">
              <div class="col-sm-9 offset-sm-3 ">
                <input name="update" type="submit" class="btn btn-primary up" id="update" value="Update">
                <input name="clear" type="reset" class="btn btn-secondary up" id="clear" value="Clear"
                  onclick="document.getElementById('form-error').innerHTML = ''">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="col-md-12">
  </div>
</div>
</div>



<?php
include("../navigation/footer.php");

?>