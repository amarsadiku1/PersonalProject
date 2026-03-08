<?php include("header2.php"); ?>
<?php include("footer2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Patient</title>
    <style>

        body {
            background-color: #cff6f2;
        }

        .custom-divider {
            border-top: 0.25px solid gray;
            width: 100%;
        }

        .bg-img {
            border: 1px solid green;
            border-radius: 25px;
            background: url(img/patient.png);
            background-position: top;
            background-repeat: repeat;
            padding: 20px;
            width: 1550px;
            height: 300px;
        }

        .text {
            text-align: center;
            padding: 20px;
            border: 1px solid #1b8171;
            border-radius: 25px;
            background-color: #71d6cc;
            margin-left: 15%;
            width: 1050px;
            height: 345px;
}

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none text-white">
                <i class="fs-4 bi-hospital me-2"></i><span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <hr class="dropdown-divider custom-divider">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="sidebarP.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pdList.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-person-lines-fill"></i> <span class="ms-1 d-none d-sm-inline">Doctor Contact</span></a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fs-4 ms-1 bi-person-circle"></i>
                        <span class="d-none d-sm-inline mx-1">Account</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">

                <div class="bg-img">
                    <h1>Hello Patient!</h1>
                    <h4>This is your dedicated page in where you can control your website.</h4>
                </div>

                <br><br><br><br>

                <div class="text">
                    <h1>What can you do as a Patient?</h1>
                    <h6>As a patient, you have access to a straightforward interface to view available doctors and easily contact them.</h6>
                    <p>As a Patient, your experience is designed to be simple and effective. Your key features include: <br>
                        <ol><b>View Doctor List:</b> Browse through a list of available doctors across different specialties. <br>
                        <b>Access Doctor Contact Information:</b> Find contact details for each doctor, including their phone numbers and email addresses for easy communication. <br>
                        <b>View Doctor Details:</b> Get more information about each doctor, such as their qualifications, experience, and areas of expertise. <br></ol>
                        Your role is to browse, choose the right doctor for your needs, and keep track of any communication or appointments you may have. Our platform ensures you can easily find the help you need with just a few clicks.</p>
                </div>


            </div>
    </div>
</body>
</html>