<?php include_once('view/header.php'); 
header("Access-Control-Allow-Origin:*");

?>
<div>
    
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<center><h2><b><a href="/"><span style="color: #3498db">WEW EMBED</span></b></h2></center>
				</div>
			</div>	
			<div class="row">
<div class="col-lg-12">
    <div class="alert alert-dismissible alert-danger animated fadeInDown" id="download2" style="display; margin-bottom: 0px; text-transform: uppercase;">
<center><a href="#howto" class="btn btn-success" style="line-height: 10px; margin-top: -5px;">How To Use? Click Here 2x</a></div></center>
</div>
</div>
<br>
<div class="row">
<div class="col-lg-12">
<div class="jumbotron">
<form action method="POST">
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-film"></i></span>
<input class="form-control input-lg" type="text" name="url" placeholder="Link Video Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-navicon"></i></span>
<input class="form-control input-lg" type="text" name="subtitle" placeholder="Link Subtittle Indonesia Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-navicon"></i></span>
<input class="form-control input-lg" type="text" name="subtitleen" placeholder="Link Subtittle English Here" value="" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-image"></i></span>
<input class="form-control input-lg" type="text" name="thumbnail" placeholder="Link Poster Here" value="https://embed.45movies.com/back2.png" style="width:100%" />
</div>
</div>
<div class="form-group">
<div class="input-group input-group-lg">
<span class="input-group-addon"><i class="fa fa-fw fa-file-image-o"></i></span>
<input class="form-control input-lg" type="text" name="logo" placeholder="Link Logo Here" value="https://embed.45movies.com/logo.png" style="width:100%" />
</div>
</div>
					<!--IKLAN DI ATAS GENERATE-->
					
					<div class="form-group" align="center">
						<button type="submit" class="btn btn-info"><span class="fa fa-retweet"></span>GENERATE</button>
					</div>
				</form>
			</div>
			</div>
</div>
			
			<?php
			if(isset($linkEncode)){
				?>
				
				<div class="col-md-12">
					<div>
						<span class="label label-primary">
							Embed Player Code
						</span>
						<br/>
						<textarea id="embed" onclick="this.select();" class="form-control" rows="4"><iframe style="border:0px #FFFFFF none;" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="400" width="100%" src="<?=$linkEncode?>" allowfullscreen></iframe>
</textarea>
<button class="btn btn-primary" data-clipboard-target="#embed"><span class="fa fa-files-o"></span> Copy Text</button>
	</div>
	    </div>
				<div class="col-md-12">
					<div>
						<span class="label label-primary">
							Jwplayer Link Code
						</span>
						<br/>
						<textarea id="link" onclick="this.select();" class="form-control" rows="4"><?=$linkEncode?></textarea>
						<button class="btn btn-primary" data-clipboard-target="#link"><span class="fa fa-files-o"></span> Copy Text</button>
						</div>
						    </div>
	<script src="/assets/clipboard/dist/clipboard.min.js"></script>

<script>
    var clipboard = new Clipboard('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>	
			
				<?php
			}
			?>
			<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-film"></i> Preview Video</h3>
</div>
<div class="panel-body">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" style="border:0px #FFFFFF none;" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="100%" width="100%" src="<?=$linkEncode?>" allowfullscreen></iframe> </div>
</div>
</div>
</div>

<div class="col-lg-12">
<div class="animated fadeInUp" id="howto">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-retweet"></i> How To Use</h3>
</div>
<div class="panel-body">
<div class="alert alert-danger">Google Drive:<strong> https://drive.google.com/file/d/0Bzi-Tk3PnuFiRnQ4eUo2YlZscnc/view</strong></div>
<div class="alert alert-danger">Link Poster:<strong>https://coplay.me/thumbnail/thumbnail.jpg</strong></div>
<div class="alert alert-danger">Link Poster:<strong> https://coplay.me/logo/logo.jpg</strong></div>
<div class="alert alert-danger">Subtitle:<strong> https://coplay.me/sub/subtittle.srt</strong></div>
</div>
</div>
			
<?php include_once('view/footer.php');?>