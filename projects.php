<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CProfile.org - Welcome to the world of Charity!</title>

    <!-- jQuery UI CSS -->
    <link href="jquery-ui-1.11.1/jquery-ui.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="calendarDateInput.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">CProfile.org</a>
            </div>
 <?php include 'topNavbar.php' ?>
 <?php include 'topSidebar.php' ?>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Projects</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#tab1">Create</a></li>
				  <li ><a href="#tab2">List</a></li>
				  <li><a href="#tab3">Other</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane fade" id="tab1">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
				            <!-- /.row -->
				            <div class="row">
				                <div class="col-lg-12">
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            Enter the details of a new Project to be started
				                        </div>
				                        <div class="panel-body">
				                            <form id="projectCreate" role="form">
					                            <div class="row">
					                                <div class="col-lg-6">
				                                        <div class="form-group">
				                                            <label>Project Title</label>
				                                            <input name="txtTitle" class="form-control">
				                                            <p class="help-block">Example block-level help text here.</p>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Location</label>
				                                            <input name="txtLocation" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="row">
				                                        	<div class="col-lg-6">
						                                        <div class="form-group">
						                                            <label>Start Date</label>
						                                           <script>DateInput('txtStartDate', true, 'YYYY-MM-DD')</script>
						                                        </div>
						                                    </div>
				                                        	<div class="col-lg-6">
						                                        <div class="form-group">
						                                            <label>End Date</label>
						                                           <script>DateInput('txtEndDate', true, 'YYYY-MM-DD')</script>
						                                        </div>
						                                    </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Twitter Hashtag</label>
				                                            <input name="txtHashtag" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Facebook</label>
				                                            <input name="txtFacebook" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Youtube URL</label>
				                                            <input name="txtYoutubeURL" class="form-control" placeholder="Enter text">
				                                        </div>
				
					                                </div>
					                                <div class="col-lg-6">
				                                        <div class="form-group">
				                                            <label>Brief Description</label>
				                                            <textarea name="txtDetails" class="form-control" rows="3"></textarea>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Target for Fund Raising</label>
				                                            <input name="txtFundsRequired" class="form-control" placeholder="Enter dollar amount">
				                                        </div>
				                                        <div class="form-group">
				                                            <label># of Volunteers Required</label>
				                                            <input name="txtVolunteersRequired" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Skills Required</label>
				                                            <input name="txtSkillsRequired" class="form-control" placeholder="Enter text">
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Category</label>
				                                            <div class="checkbox">
				                                                <label>
				                                                    <input name="catCategory" type="checkbox" value="">Accident & Emergencies
				                                                </label>
				                                            </div>
				                                            <div class="checkbox">
				                                                <label>
				                                                    <input name="catCategory" type="checkbox" value="">Pets & Animals
				                                                </label>
				                                            </div>
				                                            <div class="checkbox">
				                                                <label>
				                                                    <input name="catCategory" type="checkbox" value="">Family & Kids
				                                                </label>
				                                            </div>
				                                        </div>
				                                        <div class="form-group">
				                                            <label>Project Banner</label>
				                                            <input type="file" name="upfile" id="upfile">
				                                        </div>
				   	                                </div>
						                            <div class="row">
						                                <div class="col-lg-12">
					                                        <div class="form-group">
						                                        <button id="butSubmit" type="button" class="btn btn-default" oncl>Create New Project</button>
						                                        <button id="butReset" type="reset" class="btn btn-default">Reset Button</button>
					                                        </div>
				                                        </div>
				                                    </div>
				                                    <input type="hidden" name="module" value="project">
				                                    <input type="hidden" name="action" value="set">
				                                </form>
				                            </div>
				                            <!-- /.row (nested) -->
				                        </div>
				                        <!-- /.panel-body -->
				                    </div>
				                    <!-- /.panel -->
				                </div>
				                <!-- /.col-lg-12 -->
				            </div>
				            <!-- /.row -->
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				  <div class="tab-pane fade active" id="tab2">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div class="table-responsive" id="tableRowsProjects">
	                            </div>
	                         </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				  <div class="tab-pane fade active" id="tab3">
	                <div class="col-lg-12">
	                    <div class="panel panel-default">
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <div class="table-responsive" id="tableRowsTwitter">
	                            </div>
	                         </div>
	                        <!-- /.panel-body -->
	                    </div>
	                    <!-- /.panel -->
	                </div>
	                <!-- /.col-lg-12 -->
				  </div>
				</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery UI Version 1.11.0 -->
    <script src="jquery-ui-1.11.1/jquery-ui.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
<script>
$('.nav-tabs > li').mouseover( function(){
    $(this).find('a').tab('show');
});
$('.nav-tabs > li').mouseout( function(){
  $(this).find('a').tab('hide');
});		
</script>
<script>
	function ajax(oData) {
		$.ajax({
			  url: oData.url,
			  data: oData.data
			}).done(function (respData) {
				callback(oData.callback);
			});
	}

	$("#butSubmit").click(function (){
		ajax({
			url: "controller.php",
			data: $("#projectCreate").serialize(),
			callback: "projectSet"
			});
	});
	
	function callback(oDataParam) {
		switch(oDataParam.callback) {
		case "projectSet":
			location.href="projects.php";
			break;	
		}
	}
	
	$(function (){
		$("#txtStartDate").datepicker();
		$("#txtEndDate").datepicker();
	});

</script>
<script>
	function getEmployees(paramDiv, paramPageId) {
		var reqData = 'p='+paramPageId;
		var fbPostHtml = '';
		//alert(reqData);
		$.ajax({
			  url: "http://www.cprofile.org/searchProj.php",
			  data: reqData
			}).done(function (respData) {
				eval('respData='+respData, 'javascript');
				for (i=0; i<respData.length; i++) {
					//alert(fbPosts['data'][i]['message']);
					fbPostHtml = fbPostHtml + '<tr>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['project_title']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['target_donation']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['collected_donation']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['location']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['start_date']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['end_date']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['skills']+'</td>';
					fbPostHtml = fbPostHtml + '<td>'+respData[i]['hashTag']+'</td>';
					fbPostHtml = fbPostHtml + '</tr>';
				}
				fbPostHtml = '<table class="table">'
	                +'<thead>'
	                +'<tr>'
	                +'<th>Project Title</th>'
	                +'<th>Target Donation</th>'
	                +'<th>Collected</th>'
	                +'<th>Location</th>'
	                +'<th>Start</th>'
	                +'<th>End</th>'
	                +'<th>Skills</th>'
	                +'<th>Twitter</th>'
	                +'</tr>'
	                +'</thead>'
	                +'<tbody>'
	                +fbPostHtml
	                +'</tbody>'
	            	+'</table>';
				//alert(fbPostHtml);
				document.getElementById(paramDiv).innerHTML = fbPostHtml;
			});
	}

	getEmployees('tableRowsProjects','');

</script>

