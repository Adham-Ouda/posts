<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-lg-12 margin-tb">
		        <div class="pull-left">
		            <h2>Posts</h2>
		        </div>
		        <div class="pull-right">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Add New post</button>
		        </div>
		    </div>
		</div>
		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Title</th>
				<th>Description</th>
				<th>Photos</th>
				<th>Likes</th>
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>

		<ul id="pagination" class="pagination-sm"></ul>

		<!-- Create Item Modal -->
		@include('create')
		
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<script type="text/javascript">
		var url = "<?php echo route('myposts.index')?>";
	</script>
	<script src="/js/postsAjax.js"></script> 
</body>
</html>