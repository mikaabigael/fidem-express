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
<?php
$id = $_GET['id'];
$query = "SELECT * from tb_user where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)) :
?>

  <body>
    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #1cb688;">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php?id=<?php echo $row['id'] ?>">
          <img src="image/logo_putih.png" alt="navbar-brand" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php?id=<?php echo $row['id'] ?>" style="color: white; font-size: 15px;"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="order.php?id=<?php echo $row['id'] ?>" style="color: white; font-size: 15px;"><b>Order</b></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>Information</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="faq.php?id=<?php echo $row['id'] ?>">FAQ</a></li>
                <li><a class="dropdown-item" href="Packaging.php?id=<?php echo $row['id'] ?>">Packaging Information</a></li>
                <li><a class="dropdown-item" href="Delivery.php?id=<?php echo $row['id'] ?>">Term</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>About Us</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton3">
                <li><a class="dropdown-item" href="companyprofil.php?id=<?php echo $row['id'] ?>">Company Profile</a></li>
                <li><a class="dropdown-item" href="newsevents.php?id=<?php echo $row['id'] ?>">News & Events</a></li>
                <li><a class="dropdown-item" href="career.php?id=<?php echo $row['id'] ?>">Career</a></li>
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
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-2">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" style="background-color: #1cb688; color:white"><?php echo $row['nama'] ?></a>
                </li>
                <li><a class="dropdown-item mt-1" href="settings.php?id=<?php echo $row['id'] ?>">Settings</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container pt-md-50 pt-15 pb-20">
      <div class="row">
        <div class="col-md-15">
          <img src="image/tc.png" class="mx-auto d-block" alt="" width="30%">
          <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4" style="position: relative; left: 30px;">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <!-- <a href="Packaging.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Guidance</a> -->
                                    <!-- <a href="Dangerous.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Dangerous Goods</a> -->
                                    <!-- <a href="Prohibited.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Prohibited</a> -->
                                    <a href="delivery.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Delivery T&C</a>
                                    <a href="TC.php?id=<?php echo $row['id'] ?>" class="btn btn-success">T&C</a>
                                    <a href="Privacy.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Privacy Policy</a>
                                    <a href="Cookies.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Cookies Policy</a>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php endwhile ?>

        <h4 class="judul mt-4" style= "text-align: center">Terms and Conditions</h4>
        <div class="position-relative mt-4">
		<h6>Effective Date : June, 2021</h6>

		</p>These terms and conditions outline the rules and regulations for the use of Fidem Express's (Fidem) Website, located at fidem.co.id.</p>

		<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Fidem Express Website if you do not agree to take all of the terms and conditions stated on this page.</p>

		<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Indonesia. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

		<h6>Cookies</h6>
		<p>We employ the use of cookies. By accessing Fidem Express Website, you agreed to use cookies in agreement with the PT. FIDEM Express's Cookies Policy.
		<br>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

		<h6>License</h6>
		<p>Unless otherwise stated, PT. FIDEM Express and/or its licensors own the intellectual property rights for all material on Fidem Express Website. All intellectual property rights are reserved. You may access this from Fidem Express Website for your own personal use subjected to restrictions set in these terms and conditions.</p>
		<p>You must not:</p>
		<li>Republish material from Fidem Express Website</li>
		<li>Sell, rent or sub-license material from Fidem Express Website</li>
		<li>Reproduce, duplicate or copy material from Fidem Express Website</li>
		<li>Redistribute content from Fidem Express Website</li>

		 <br>

		<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. PT. FIDEM Express does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of PT. FIDEM Express,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, PT. FIDEM Express shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
		<p>PT. FIDEM Express reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

		<p>You warrant and represent that:</p>
		<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
		<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
		<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
		<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>

		<br>

		<p>You hereby grant PT. FIDEM Express a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

		<h6>Hyperlinking to our Content</h6>
		<p>The following organizations may link to our Website without prior written approval:</p>
		<li>Government agencies;</li>
		<li>Search engines;</li>
		<li>News organizations;</li>
		<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and </li>
		<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>

		<br>

		<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

		<p>We may consider and approve other link requests from the following types of organizations:</p>
		<li>commonly-known consumer and/or business information sources;</li>
		<li>dot.com community sites;</li>
		<li>associations or other groups representing charities;</li>
		<li>online directory distributors;</li>
		<li>internet portals;</li>
		<li>accounting, law and consulting firms; and</li>
		<li>educational institutions and trade associations.</li>

		<br>

		<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of PT. FIDEM Express; and (d) the link is in the context of general resource information.
		<br>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.
		<br>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to PT. FIDEM Express. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>


		<p>Approved organizations may hyperlink to our Website as follows:</p>
		<li>By use of our corporate name; or</li>
		<li>By use of the uniform resource locator being linked to; or</li>
		<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>

		<br>

		<p>No use of PT. FIDEM Express's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>


		<h6>iFrames</h6>
		<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>


		<h6>Content Liability</h6>
		<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>


		<h6>Your Privacy</h6>
		<p>Please read Privacy Policy</p>



		<h6>Reservation of Rights</h6>
		<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

		<h6>Removal of links from our website</h6>
		<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.
		<br>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

		<h6>Disclaimer</h6>
		<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
		<li>limit or exclude our or your liability for death or personal injury;</li>
		<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
		<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
		<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>

		<br>

		<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.
		<br>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>

          
        </div>
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