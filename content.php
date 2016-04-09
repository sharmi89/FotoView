<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <?php $user = $insData['data'][0]['user']; ?>
                <h1>Foto View of <strong><?php echo $user['full_name']; ?></strong>  as @<?php echo $user['username']; ?></h1>
            </div>
        </div>
     
    </div>

<!-- item overlay view  -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    
   	<div class="slides"></div>

    <h3 class="title"></h3>
    <p class="description"></p>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- End of item overlay view  -->

<!-- Item box -->
<div id="links">
	<?php 

		foreach ($insData['data'] as $post) {
			 // var_dump("<pre>");
 // 			 var_dump($obj['data'][1]);
 // 			 exit();
		    $pic_text = $post['caption']['text'];
		    $pic_link = $post['link'];
		    $pic_like_count = $post['likes']['count'];
		    $pic_comment_count = $post['comments']['count'];
		    $pic_location = $post['location'];
		    $pic_src = str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
		    $vid_src = str_replace("http://", "https://", $post['videos']['standard_resolution']['url']);
		    $pic_created_time= date("F j, Y", $post['created_time']);
		?> 

		 <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="item-box">
                <div class="item">
                    <div>
                    	<?php if ($post['type'] === "video") { ?>
                    		<a data-gallery
                    			href="<?php echo $vid_src; ?>"
						        title="<?php echo $pic_text; ?>"
						        type="video/mp4"
						        data-poster="<?php echo $pic_src;?>"
						        data-sources='[{"href": "<?php echo $vid_src; ?>", "type": "video/mp4"}, {"href": "<?php echo $vid_src;  ?>", "type": "video/ogg"}]'
						    >
						    	<img class="img-responsive" src="<?php echo $pic_src;?>" alt="<?php echo $pic_text;?>">
						    	<span class="vid-play-btn"></span>
						    </a>
                    	<?php } else { ?>	
                            <a href="<?php echo $pic_src; ?>" title="<?php echo $pic_text; ?>" data-gallery>
					        	<div>
					        		<img class="img-responsive" src="<?php echo $pic_src; ?>" alt="<?php echo $pic_text; ?>">
					        	</div>
						    </a>
                    	<?php } ?>
                    </div>
                </div>
                <div>
                    <div class="item-details">
                    	<div class="col-lg-3">
                    		<i class="icon-heart-empty"></i>
                    		<?php echo $pic_like_count; ?>
                    	</div>
                    	<div class="col-lg-3">
                    		<i class="icon-comments-alt"></i>
                    		<?php echo $pic_comment_count; ?>
                    	</div>
                    	<div class="col-lg-6">
                    		<i class="icon-time"></i>
                    		<?php echo $pic_created_time ;?>
                    	</div>
                    </div>
                    <div class="item-details">
                    	<div class="col-lg-8">
                    		<i class="icon-map-marker"></i> 
                    		<?php echo $pic_location; ?>
                    	</div>
                    	<div class="col-lg-4">
                    		<a href="<?php echo $pic_link; ?>" target='_blank'>
                    			<i class="icon-instagram"></i> Instagram
                    		</a>
                    		
                    	</div>
                    </div>
                    <div class="item-details">
                    	<div class="col-lg-12">
                    		<?php echo $pic_text?>
                    	</div>
                    </div>
                </div>
            </div>
        </div>

		<?php
	}
	?>
</div>
<!-- End of Item list -->