
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Multi Range Calendar a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />
    <!-- calendar css -->
    
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th, td {
			  text-align: left;
			  padding: 8px;
			}

			tr:nth-child(odd){background-color: #f2f2f2}
			tr:nth-child(){background-color: blue}

			th {
			  background-color: #4CAF50;
			  color: white;
			}
		</style>
</head>

<body>
   <body id="login">
 
 <header>
        <h2 class="text-center;font-size=30px;" style="color:red;">Welcome!! <?php echo $this->session->userdata('employee_fname');?> To your Roster Page</h2>
		
 </header>
	<table>
  <tr>
	<th>Roster Title</th>
    <th>Date</th>
    <th>Location</th>
    <th>Description</th>
	<th>Company Name</th>
	<th>Status</th>
	
  </tr>
 <?php foreach($result as $row) { ?>
	<tr>
		<td><?php echo $row->roster_title;?></td>
		<td><?php echo $row->date;?></td>
		<td><?php echo $row->location;?></td>
		<td><?php echo $row->roster_description;?></td>
		<td><?php echo $row->company_name;?></td>
		
		
	
		<td><a href="updateStatusAccept/?id=<?php echo $row->id; ?>">Accept</a> -
		<a href="updateStatusDecline/?id=<?php echo $row->id; ?>">Decline</a></td>
	</tr>
 <?php } ?>
</table>
	
	

</body>

</html>