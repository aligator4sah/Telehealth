<head>
	<!-- Basic informations -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Site informations -->
	<title>TeleHealth Vendor</title>

	<!-- Open Graph -->
	<meta property="og:title" content="Free Aurora Template">
	<meta property="og:description" content="Free HTML5 Template created by Dominik Serafin.">
	<meta property="og:url" content="http://serafin.io/aurora-template/">
	<meta property="og:image" content="http://serafin.io/aurora-template/content/og_image.png">


	<!-- Fonts -->
	<link href="style/fonts/webfont-raleway/webfont-raleway.css" rel="stylesheet" type="text/css">
	<link href="style/fonts/webfont-font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Stylesheets -->
	<link href="style/css/global.css" type="text/css" rel="stylesheet" media="all">
	 
	 <style>
    .button {
		background-color: transparent;
		border: 3px solid #ccc;
		color: whilte;
		padding: 8px 14px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 24px;
		
		cursor: pointer;
    }
	
	</style>
	
	
</head>

<body>
<form action="BlankSurvey3.php" method="post">
                <ol>
                <?php foreach($rows as $row): ?> 
                    <li>
                        <label><?php echo ($row['description']); ?></label>
                        <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="Yes">
                              Yes
                            </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="No">
                            No
                          </label>
                        </div>
                         <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="Dont Know">
                            Don't Know
                          </label>
                        </div> <br>
                    </li>
                <?php endforeach; ?>
                </ol>
                    <button type="submit" class="button" onclick = "sendTo">Next</button>
                    <!-- <a type="submit" href = "finalGraph3.php">&nbsp; &nbsp; or Done </a>-->
                       <script src="http://code.jquery.com/jquery-1.9.1.js">
							function sendTo(){
							ajax to 'test.php';
							send to 'BlankSurvey3.php';
        }
    </script>
                </form>
</body>