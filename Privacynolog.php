<?php

require "functions.php";


?>

<!DOCTYPE html>
<html>

<head>
  <title>FIDEM EXPRESS</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #1cb688;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="image/logo_putih.png" alt="navbar-brand" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="color: white; font-size: 15px;"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php" style="color: white; font-size: 15px;"><b>Order</b></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>Information</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="faqnolog.php">FAQ</a></li>
                <li><a class="dropdown-item" href="Packagingnolog.php">Packaging Information</a></li>
                <li><a class="dropdown-item" href="Deliverynolog.php">Term</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>About Us</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton3">
                <li><a class="dropdown-item" href="companyprofilnolog.php">Company Profile</a></li>
                <li><a class="dropdown-item" href="newseventsnolog.php">News & Events</a></li>
                <li><a class="dropdown-item" href="careernolog.php">Career</a></li>
              </ul>
            </li>
          </ul>
          <div id='form-input'>
            <form action="cekresi.php" method="get" class="d-flex justify-content-center">
              <input name="cari" id="cari" class="form-control me-2" type="search" placeholder="Cek Resi" aria-label="Search">
              <input name="id" id="id" class="kirim me-2" type="hidden" value="<?php echo $row['id'] ?>">
              <input value="Search" type="submit" role="button" class="btn btn-outline-dark border border-2 me-md-4" style="color :black; background-color: #fff;">
            </form>
          </div>
        <a href="login.php" class="btn btn-primary">Login/Registrasi</a>
      </div>
    </div>
  </nav>
    <div class="container pt-md-50 pt-15 pb-20">
      <div class="row">
        <div class="col-md-15">
          <img src="image/pp.png" class="mx-auto d-block" alt="" width="30%">
          <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4" style="position: relative; left: 30px;">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <a href="deliverynolog.php" class="btn btn-success">Delivery T&C</a>
                                    <a href="TCnolog.php" class="btn btn-success">T&C</a>
                                    <a href="Privacynolog.php" class="btn btn-success">Privacy Policy</a>
                                    <a href="Cookiesnolog.php" class="btn btn-success">Cookies Policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
		
		<h4 class="judul mt-4" style= "text-align: center">Privacy Policy</h4>
    <div class="position-relative mt-4">
		<h6>Effective Date : June, 2021</h6>

		<p>PT. FIDEM Express ("us", "we", or "our") operates the Fidem Express Website (the "Service"). </p>
		<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.</p>
		<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions</p>
		 
		<h6>Information Collection And Use</h6>
		<p>We collect several different types of information for various purposes to provide and improve our Service to you</p>
		 
		<h6>Types of Data Collected</h6>
		<h6>Personal Data</h6>
		<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include,
			but is not limited to:</p>
		<li>Email address</li>
		<li>First name and last name</li>
		<li>Phone number</li>
		<li>Address, State, Province, ZIP/Postal code, City</li>
		<li>Cookies and Usage Data</li>

		<br>

		<h6>Usage Data</h6>
		<p>When you access the Service by or through a personal computer or mobile device, we may collect certain information automatically, including, but not limited to, the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic data ("Usage Data")</p>
		 

		<h6>Tracking & Cookies Data</h6>
		<p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.
		<br>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.
		<br>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>

		<p>Examples of Cookies we use:</p>
		<li>Session Cookies. We use Session Cookies to operate our Service.</li>
		<li>Preference Cookies. We use Preference Cookies to remember your preferences and various settings.</li>
		<li>Security Cookies. We use Security Cookies for security purposes.</li>

		<br>

		<h6>Use of Data</h6>
		<p>PT. FIDEM Express uses the collected data for various purposes:</p>
		<li>To provide and maintain the Service</li>
		<li>To notify you about changes to our Service</li>
		<li>To allow you to participate in interactive features of our Service when you choose to do so</li>
		<li>To provide customer care and support</li>
		<li>To provide analysis or valuable information so that we can improve the Service</li>
		<li>To monitor the usage of the Service</li>
		<li>To detect, prevent and address technical issues</li>

		<br>

		<h6>Transfer Of Data</h6>
		<p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction. </p>
		<p> If you are located outside Indonesia and choose to provide information to us, please note that we transfer the data, including Personal Data, to Indonesia and process it there.
		<br>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.
		<br>Fidem Express will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>
		 

		<h6>Disclosure Of Data</h6>
		<h6>Legal Requirements</h6>
		<p>Fidem Express may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
		<li>To comply with a legal obligation</li>
		<li>To protect and defend the rights or property of PT. FIDEM Express</li>
		<li>To prevent or investigate possible wrongdoing in connection with the Service</li>
		<li>To protect the personal safety of users of the Service or the public</li>
		<li>To protect against legal liability</li>
		 
		 <br>

		<h6>Security Of Data</h6>
		<p>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security. This becomes invalid, insofar as the liability can be proven due to negligence, unilateral action or neglect of the designated service provider and / or third party.</p>
		 
		<h6>Service Providers</h6>
		<p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.
		<br>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose based on the 2016/679 about General Data Protection (EU) Regulations and applicable laws and codes of ethics in Indonesia.</p>
		 
		<h6>Links To Other Sites</h6>
		<p>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.
		<br>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

		<h6>Children's Privacy</h6>
		<p>Our Service does not address anyone under the age of 18 ("Children").
		<br>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>


		<h6>Changes To This Privacy Policy</h6>
		<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.
		<br>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.
		<br>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

        </div>
        </div>
      </div>
    </div>
    </div>
    <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px;">
      <div class="isi">
        <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
      </div>
    </footer>
    <script src="./css/main.js"></script>
  </body>

</html>