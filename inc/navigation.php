<!-- <?php if ($usertype == 'GUEST') { ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" align="center" class="navigation"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" height="20">
                    <tr>
                      <td width="90" align="center" id="tabgroup1h1" onclick="navigationtab('1','tabgroup1','home-nav','home-nav-div-line','home-nav-sub-div'); SetCookie('navigationcookie','1|tabgroup1|home-nav|home-nav-div-line|home-nav-sub-div');" style="cursor:pointer">Home</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h2" onclick="navigationtab('2','tabgroup1','register-nav','register-nav-div-line','register-nav-sub-div'); SetCookie('navigationcookie','2|tabgroup1|register-nav|register-nav-div-line|register-nav-sub-div');" style="cursor:pointer">Registers</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h3" onclick="navigationtab('3','tabgroup1','profile-nav','profile-nav-div-line','profile-nav-sub-div'); SetCookie('navigationcookie','3|tabgroup1|profile-nav|profile-nav-div-line|profile-nav-sub-div'); " style="cursor:pointer">Profile</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h4" onclick="navigationtab('4','tabgroup1','website-nav','website-nav-div-line','website-nav-sub-div'); SetCookie('navigationcookie','4|tabgroup1|website-nav|website-nav-div-line|website-nav-sub-div'); " style="cursor:pointer">Websites</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="110" align="center" id="tabgroup1h5" onclick="navigationtab('5','tabgroup1','kb-nav','kb-nav-div-line','kb-nav-sub-div'); SetCookie('navigationcookie','5|tabgroup1|kb-nav|kb-nav-div-line|kb-nav-sub-div'); " style="cursor:pointer">Knowledge Base</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="25" id="nav-sub-div"><div style="display:block;" id="tabgroup1t1"></div>
                  <div style="display:block" id="tabgroup1c1">
                  <a href="./index.php?a_link=home_dashboard">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=home_setting">Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=home_help">Help</a></div>
                  <div style="display:none" id="tabgroup1t2"></div>
                  <div style="display:none" id="tabgroup1c2">
                  <a href="./index.php?a_link=register_call">Calls</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_error">Errors</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_inhouse">In-house</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_onsite">Onsite</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_reference">References</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_requirement">Requirements</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_skype">Skype</a></div>
                  <div style="display:none" id="tabgroup1t3"></div>
                  <div style="display:none" id="tabgroup1c3">
                 
                  <a href="./index.php?a_link=profile_viewprofile">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <a href="./index.php?a_link=profile_editprofile">Edit Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=profile_changepassword">Change Password</a></div>
                  <div style="display:none" id="tabgroup1t4"></div>
                  <div style="display:none" id="tabgroup1c4">
                  <a href="http://www.relyonsoft.com" target="_blank">Relyonsoft.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saraltds.com/" target="_blank">Saraltds.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralvat.com" target="_blank">Saralvat.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saraltaxoffice.com/" target="_blank">Saraltaxoffice.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralpaypack.com/" target="_blank">Saralpaypack.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralaccounts.com/" target="_blank">Saralaccounts.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://saralxbrl.in/" target="_blank">Saralxbrl.in</a>|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://userlogin.relyonsoft.com/" target="_blank">Userlogin.relyonsoft.com</a></div>
                  <div style="display:none" id="tabgroup1t5"></div>
                  <div style="display:none" id="tabgroup1c5">
                  <a href="./index.php?a_link=kb_view">View KB</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=kb_add">Add Topics</a></div></td>
              </tr>
            </table>
<?php } else { ?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="20" align="center" class="navigation"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0" height="20">
                    <tr>
                      <td width="90" align="center" id="tabgroup1h1" onclick="navigationtab('1','tabgroup1','home-nav','home-nav-div-line','home-nav-sub-div'); SetCookie('navigationcookie','1|tabgroup1|home-nav|home-nav-div-line|home-nav-sub-div');" style="cursor:pointer">Home</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h2" onclick="navigationtab('2','tabgroup1','register-nav','register-nav-div-line','register-nav-sub-div'); SetCookie('navigationcookie','2|tabgroup1|register-nav|register-nav-div-line|register-nav-sub-div');" style="cursor:pointer">Registers</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h3" onclick="navigationtab('3','tabgroup1','billing-nav','billing-nav-div-line','billing-nav-sub-div'); SetCookie('navigationcookie','3|tabgroup1|billing-nav|billing-nav-div-line|billing-nav-sub-div'); " style="cursor:pointer">Billing</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h4" onclick="navigationtab('4','tabgroup1','master-nav','master-nav-div-line','master-nav-sub-div'); SetCookie('navigationcookie','4|tabgroup1|master-nav|master-nav-div-line|master-nav-sub-div');" style="cursor:pointer">Masters</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h5" onclick="navigationtab('5','tabgroup1','profile-nav','profile-nav-div-line','profile-nav-sub-div'); SetCookie('navigationcookie','5|tabgroup1|profile-nav|profile-nav-div-line|profile-nav-sub-div'); " style="cursor:pointer">Profile</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="90" align="center" id="tabgroup1h6" onclick="navigationtab('6','tabgroup1','website-nav','website-nav-div-line','website-nav-sub-div'); SetCookie('navigationcookie','6|tabgroup1|website-nav|website-nav-div-line|website-nav-sub-div'); " style="cursor:pointer">Websites</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td width="110" align="center" id="tabgroup1h7" onclick="navigationtab('7','tabgroup1','kb-nav','kb-nav-div-line','kb-nav-sub-div'); SetCookie('navigationcookie','7|tabgroup1|kb-nav|kb-nav-div-line|kb-nav-sub-div'); " style="cursor:pointer">Knowledge Base</td>
                      <td align="center" class="navigation-menusep"></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="25" id="nav-sub-div"><div style="display:block;" id="tabgroup1t1"></div>
                  <div style="display:block" id="tabgroup1c1">
                  <a href="./index.php?a_link=home_dashboard">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=home_setting">Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=home_help">Help</a></div>
                  <div style="display:none" id="tabgroup1t2"></div>
                  <div style="display:none" id="tabgroup1c2">
                  <a href="./index.php?a_link=register_call">Calls</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_email">Emails</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_error">Errors</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_inhouse">In-house</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_onsite">Onsite</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_reference">References</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_requirement">Requirements</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=register_skype">Skype</a></div>
                  <div style="display:none" id="tabgroup1t3"></div>
                  <div style="display:none" id="tabgroup1c3">
                  <a href="./index.php?a_link=billing_invoice">Invoices</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=billing_receipts">Receipts</a>
                  </div>
                  <div style="display:none" id="tabgroup1t4"></div>
                  <div style="display:none" id="tabgroup1c4">
                  <a href="./index.php?a_link=master_customer">Customer</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php if ($usertype == 'ADMIN') { ?>
                  <a href="./index.php?a_link=master_users">Users</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <?php } ?>
                  <?php if ($usertype <> 'EXECUTIVE-OTHERS' && $usertype <> 'EXECUTIVE-ONSITE') { ?>
                  <a href="./index.php?a_link=master_locations">Locations</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php } ?>
                  
                  <a href="./index.php?a_link=master_product">Products</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=master_version">Versions</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <?php if ($usertype <> 'EXECUTIVE-OTHERS' && $usertype <> 'EXECUTIVE-ONSITE') { ?>
                  <a href="./index.php?a_link=master_osemployees">Out Station Employees</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=master_dealers">Dealers</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=master_category">Categories</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=master_supportunit">Support Units</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php } ?>
                 <?php if ($usertype == 'ADMIN') { ?>
                   <a href="./index.php?a_link=master_nonworkingdays">Non Working Days</a>
                  <?php } ?>
                  </div>
                  <div style="display:none" id = "tabgroup1t5"></div>
                  <div style="display:none" id = "tabgroup1c5">
                   <?php if ($usertype <> 'MANAGEMENT') { ?>
                  <a href="./index.php?a_link=profile_viewprofile">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php } ?>
                  <a href="./index.php?a_link=profile_editprofile">Edit Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=profile_changepassword">Change Password</a></div>
                  <div style="display:none" id="tabgroup1t6"></div>
                  <div style="display:none" id="tabgroup1c6">
                  <a href="http://www.relyonsoft.com" target="_blank">Relyonsoft.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saraltds.com/" target="_blank">Saraltds.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralvat.com" target="_blank">Saralvat.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saraltaxoffice.com/" target="_blank">Saraltaxoffice.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralpaypack.com/" target="_blank">Saralpaypack.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.saralaccounts.com/" target="_blank">Saralaccounts.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://saralxbrl.in/" target="_blank">Saralxbrl.in</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://userlogin.relyonsoft.com/" target="_blank">Userlogin.relyonsoft.com</a></div>
                  <div style="display:none" id="tabgroup1t7"></div>
                  <div style="display:none" id="tabgroup1c7">
                  <a href="./index.php?a_link=kb_view">View KB</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="./index.php?a_link=kb_add">Add Topics</a></div></td>
              </tr>
            </table>
<?php } ?>            
   -->

<?php if ($usertype == 'ADMIN') { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- <base href="./">
 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SSM Support</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="manifest" href="../assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="../vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="../css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/examples.css">
    <link rel="stylesheet" href="../css/examples.css.map">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css.map">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- grid js -->

    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- grid js  -->


    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="../css/examples.css" rel="stylesheet">
    <link href="../vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">


    <!-- calendar -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="calendar/fonts/icomoon/style.css">

    <link href='calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="calendar/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="calendar/css/style.css">


    <!-- calendar -->
    <style>
      /* Customizing the scrollbar */
      ::-webkit-scrollbar {
        width: 5px;
        /* Width of the scrollbar */
      }

      /* Styling the thumb (the draggable part of the scrollbar) */
      ::-webkit-scrollbar-thumb {
        background-color: gray;
        /* Blue color for the thumb */
        /* Rounded edges for the thumb */
      }

      /* Styling the track (the area the thumb moves along) */
      ::-webkit-scrollbar-track {
        background-color: #f2f2f2;
        /* Lighter background color for the track */
      }
    </style>

  </head>

  <body class="bg-white;" style="z-index:2;">
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">


      <!-- <ul class="h-4 p-4"> logo </ul> -->
      <style>
        .navbar {
          display: flex;
          align-items: center;

        }

        .navbar img {
          max-height: 100%;
          max-width: 80%;
          margin-left: 8px;
          /* Additional styling for the image */
        }
      </style>

      <ul class="navbar">
        <img src="../assets/img/avatars/logo1.png" alt="">
      </ul>


      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="../index.php">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard
          </a></li>
        <li class="nav-title">Options</li>
        <li class="nav-item"><a class="nav-link" href="Authorization_summary.php">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-book"></use>
            </svg> Record Authorization</a></li>

        <li class="nav-title">Navigation</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-screen-desktop"></use>
            </svg> Registers</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="calls.php"><span class="nav-icon"></span>
                Calls</a></li>
            <li class="nav-item"><a class="nav-link" href="email.php"><span class="nav-icon"></span>
                Emails</a></li>
            <li class="nav-item"><a class="nav-link" href="error_register.php"><span class="nav-icon"></span>
                Errors</a></li>
            <li class="nav-item"><a class="nav-link" href="In-house.php"><span class="nav-icon"></span>
                In-house</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Onsite_register.php"><span class="nav-icon"></span>
                Onsite</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="References.php"><span class="nav-icon"></span>
                References</a></li>
            <li class="nav-item"><a class="nav-link" href="Requirements.php"><span class="nav-icon"></span>
                Requirements</a></li>
            <li class="nav-item"><a class="nav-link" href="skype.php"><span class="nav-icon"></span>
                Skype</a></li>

          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-pen-nib"></use>
            </svg> Billings</a>
          <ul class="nav-group-items">

            <li class="nav-item"><a class="nav-link" href="invoices.php"><span class="nav-icon"></span>
                Invoices</a></li>
            <li class="nav-item"><a class="nav-link" href="receipts.php"><span class="nav-icon"></span>
                Receipts</a></li>

          </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Masters</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="customers.php"> Customer</a></li>
            <li class="nav-item"><a class="nav-link" href="Users.php"> Users</a></li>
            <li class="nav-item"><a class="nav-link" href="location.php"> Locations</a></li>
            <li class="nav-item"><a class="nav-link" href="Products.php"> Products</a></li>
            <li class="nav-item"><a class="nav-link" href="versions.php">Versions</a></li>
            <li class="nav-item"><a class="nav-link" href="Out_station.php"> Out Station Employees</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Dealers.php"> Dealers</a></li>
            <li class="nav-item"><a class="nav-link" href="Categories.php"> Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="support.php"> Support Units</a></li>
            <li class="nav-item"><a class="nav-link" href="Non-working_days.php"> Non Working Days</a>
            </li>
          </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Reports</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="stats&reports.php"><span class="nav-icon"></span>
                Stats & Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="error_report.php"><span class="nav-icon"></span>
                Error Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="Onsite.php"><span class="nav-icon"></span>
                Onsite Report</a></li>
            <li class="nav-item"><a class="nav-link" href="chartview.php"><span class="nav-icon"></span>
                Chart View</a></li>
            <li class="nav-item"><a class="nav-link" href="Attendence.php"><span class="nav-icon"></span>
                Attendence</a></li>
            <li class="nav-item"><a class="nav-link" href="dailyreport.php"><span class="nav-icon"></span>
                Daily Reports</a></li>
          </ul>
        </li>
        <li class="nav-divider"></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column bg-light" style="margin-top:-50px;">
      <header class="header header-sticky " style="z-index:10;">
        <div class="container-fluid">
          <button class="header-toggler " type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                Logged in as :
              </a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                Admin
              </a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                [
                <?php echo $usertype ?> ]
              </a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="../assets/img/avatars/8.jpg"
                    alt="user@email.com">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">

                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Profile</div>
                </div>
                <a class="dropdown-item" href="Profile.php">
                  <svg class="icon me-2">
                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Edit profile</a>
                <a class="dropdown-item" href="#">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">
                    <svg class="icon me-2">
                      <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                      </use>
                    </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider p-4">
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                  <span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
              </ol>
            </nav>
          </div>
        </div>

      </header>
      <div class="body flex-grow-1 px-3 bg-white">
        <div class="container-lg ">
          <div class="row">

          </div>
          <script src="../vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
          <script src="../vendors/simplebar/js/simplebar.min.js"></script>
          <!-- Plugins and scripts required by this view-->
          <script src="../vendors/chart.js/js/chart.min.js"></script>
          <script src="../vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
          <script src="../vendors/@coreui/utils/js/coreui-utils.js"></script>
          <script src="../js/main.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
            crossorigin="anonymous"></script>

          <script>
            document.getElementById('toggleButton').addEventListener('click', function () {
              var collapseExample = document.getElementById('collapseExample');
              if (collapseExample.classList.contains('show')) {
                collapseExample.classList.remove('show');
              } else {
                collapseExample.classList.add('hide');


              }
            });
          </script>
  </body>

  </html>

<?php } ?>
<?php if ($usertype == 'GUEST') { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- <base href="./">
 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>SSM Support</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="manifest" href="../assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="../vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="../css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/examples.css">
    <link rel="stylesheet" href="../css/examples.css.map">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/examples.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css.map">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- grid js -->

    <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

    <!-- grid js  -->


    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="../css/examples.css" rel="stylesheet">
    <link href="../vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">


    <!-- calendar -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="calendar/fonts/icomoon/style.css">

    <link href='calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="calendar/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="calendar/css/style.css">


    <!-- calendar -->
    <style>
      /* Customizing the scrollbar */
      ::-webkit-scrollbar {
        width: 5px;
        /* Width of the scrollbar */
      }

      /* Styling the thumb (the draggable part of the scrollbar) */
      ::-webkit-scrollbar-thumb {
        background-color: gray;
        /* Blue color for the thumb */
        /* Rounded edges for the thumb */
      }

      /* Styling the track (the area the thumb moves along) */
      ::-webkit-scrollbar-track {
        background-color: #f2f2f2;
        /* Lighter background color for the track */
      }
    </style>

  </head>

  <body class="bg-white;" style="z-index:2;">
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">


      <!-- <ul class="h-4 p-4"> logo </ul> -->
      <style>
        .navbar {
          display: flex;
          align-items: center;

        }

        .navbar img {
          max-height: 100%;
          max-width: 80%;
          margin-left: 8px;
          /* Additional styling for the image */
        }
      </style>

      <ul class="navbar">
        <img src="../assets/img/avatars/logo1.png" alt="">
      </ul>


      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="../index.php">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard
          </a></li>
        <!-- <li class="nav-title">Options</li>
        <li class="nav-item"><a class="nav-link" href="Authorization_summary.php">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-book"></use>
            </svg> Record Authorization</a></li> -->

        <li class="nav-title">Navigation</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-screen-desktop"></use>
            </svg> Registers</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="calls.php"><span class="nav-icon"></span>
                Calls</a></li>
            <li class="nav-item"><a class="nav-link" href="email.php"><span class="nav-icon"></span>
                Emails</a></li>
            <li class="nav-item"><a class="nav-link" href="error_register.php"><span class="nav-icon"></span>
                Errors</a></li>
            <li class="nav-item"><a class="nav-link" href="In-house.php"><span class="nav-icon"></span>
                In-house</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Onsite_register.php"><span class="nav-icon"></span>
                Onsite</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="References.php"><span class="nav-icon"></span>
                References</a></li>
            <li class="nav-item"><a class="nav-link" href="Requirements.php"><span class="nav-icon"></span>
                Requirements</a></li>
            <li class="nav-item"><a class="nav-link" href="skype.php"><span class="nav-icon"></span>
                Skype</a></li>

          </ul>
        </li>
        <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-pen-nib"></use>
            </svg> Billings</a>
          <ul class="nav-group-items">

            <li class="nav-item"><a class="nav-link" href="invoices.php"><span class="nav-icon"></span>
                Invoices</a></li>
            <li class="nav-item"><a class="nav-link" href="receipts.php"><span class="nav-icon"></span>
                Receipts</a></li>

          </ul>
        </li> -->

        <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
            </svg> Masters</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="customers.php"> Customer</a></li>
            <li class="nav-item"><a class="nav-link" href="Users.php"> Users</a></li>
            <li class="nav-item"><a class="nav-link" href="location.php"> Locations</a></li>
            <li class="nav-item"><a class="nav-link" href="Products.php"> Products</a></li>
            <li class="nav-item"><a class="nav-link" href="versions.php">Versions</a></li>
            <li class="nav-item"><a class="nav-link" href="Out_station.php"> Out Station Employees</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Dealers.php"> Dealers</a></li>
            <li class="nav-item"><a class="nav-link" href="Categories.php"> Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="support.php"> Support Units</a></li>
            <li class="nav-item"><a class="nav-link" href="Non-working_days.php"> Non Working Days</a>
            </li>
          </ul>
        </li> -->

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg> Reports</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="stats&reports.php"><span class="nav-icon"></span>
                Stats & Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="error_report.php"><span class="nav-icon"></span>
                Error Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="requirement_report.php"><span class="nav-icon"></span>
                Requirement Report</a></li>
            <li class="nav-item"><a class="nav-link" href="Onsite.php"><span class="nav-icon"></span>
                Onsite Report</a></li>
            <li class="nav-item"><a class="nav-link" href="chartview.php"><span class="nav-icon"></span>
                Chart View</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="Attendence.php"><span class="nav-icon"></span>
                Attendence</a></li> -->
            <li class="nav-item"><a class="nav-link" href="dailyreport.php"><span class="nav-icon"></span>
                Daily Reports</a></li>
          </ul>
        </li>
        <li class="nav-divider"></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column bg-light" style="margin-top:-50px;">
      <header class="header header-sticky " style="z-index:10;">
        <div class="container-fluid">
          <button class="header-toggler " type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                Logged in as :
              </a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                Admin
              </a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                [
                <?php echo $usertype ?> ]
              </a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="../assets/img/avatars/8.jpg"
                    alt="user@email.com">
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">

                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Profile</div>
                </div>
                <a class="dropdown-item" href="Profile.php">
                  <svg class="icon me-2">
                    <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Edit profile</a>
                <a class="dropdown-item" href="#">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php">
                    <svg class="icon me-2">
                      <use xlink:href="../vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                      </use>
                    </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider p-4">
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                  <span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Dashboard</span></li>
              </ol>
            </nav>
          </div>
        </div>

      </header>
      <div class="body flex-grow-1 px-3 bg-white">
        <div class="container-lg ">
          <div class="row">

          </div>
          <script src="../vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
          <script src="../vendors/simplebar/js/simplebar.min.js"></script>
          <!-- Plugins and scripts required by this view-->
          <script src="../vendors/chart.js/js/chart.min.js"></script>
          <script src="../vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
          <script src="../vendors/@coreui/utils/js/coreui-utils.js"></script>
          <script src="../js/main.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
            crossorigin="anonymous"></script>

          <script>
            document.getElementById('toggleButton').addEventListener('click', function () {
              var collapseExample = document.getElementById('collapseExample');
              if (collapseExample.classList.contains('show')) {
                collapseExample.classList.remove('show');
              } else {
                collapseExample.classList.add('hide');


              }
            });
          </script>
  </body>

  </html>


<?php } ?>